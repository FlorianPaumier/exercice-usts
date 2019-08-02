import { Component, OnInit } from '@angular/core';
import { AuthService } from "../auth/auth.service";
import { NgForm, FormBuilder, Validators } from '@angular/forms';
import { HttpErrorResponse } from '@angular/common/http';

@Component({
  selector: 'app-auth',
  templateUrl: './auth.component.html',
  styleUrls: ['./auth.component.css']
})
export class AuthComponent implements OnInit {

  private register : [];
  formR = this.fb.group({
    email: ["", [Validators.required, Validators.email]],
    password: ["", Validators.required],
  });
  formL = this.fb.group({
    email: ["", [Validators.required, Validators.email]],
    password: ["", [Validators.required, Validators.minLength(6)]],
  });

  constructor(private authService: AuthService, private fb: FormBuilder) { }

  ngOnInit() {
  }

  validateEmail(email)
  {
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(String(email).toLowerCase());
  }

  onSubmitRegister(f: NgForm) {
    if(!this.validateEmail(f.value.email)){
      const alert = document.getElementById("alertD");
      alert.classList.remove("d-none");
      alert.style.display = "block";
      alert.innerHTML = "It's not an email";
      return false;
    }
    this.authService.register(f.value).subscribe(result => {
      const alert = document.getElementById("alert");
      alert.classList.remove("d-none");
      alert.style.display = "block";
      alert.innerHTML = result;
      this.register = result;
    },(err: HttpErrorResponse) => {
      if(err.status == 400)
        console.log(err);
        const alert = document.getElementById("alertD");
        alert.classList.remove("d-none");
        alert.style.display = "block";
        alert.innerHTML = err.error;
    });
  }

  onSubmitLogin(g: NgForm){
    this.authService.login(g.value).subscribe(result => {
      if(result.email) {
        localStorage.setItem("email", result.email);
        document.location.reload(true);
      }
    },(err: HttpErrorResponse) => {
      if(err.status == 400)
        console.log(err);
        const alert = document.getElementById("alertD");
        alert.classList.remove("d-none");
        alert.style.display = "block";
        alert.innerHTML = err.error;
    });
  }
}
