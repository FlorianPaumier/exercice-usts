import { Component, OnInit } from '@angular/core';
import { NgForm, Validators } from '@angular/forms';
import { FormBuilder } from '@angular/forms';
import { ArticleService } from  '../article/article.service';
import { HttpErrorResponse } from '@angular/common/http';

@Component({
  selector: 'app-createarticle',
  templateUrl: './createarticle.component.html',
  styleUrls: ['./createarticle.component.css']
})
export class CreatearticleComponent implements OnInit {

  private category : [];
  form = this.fb.group({
    title: ["", Validators.required],
    content: ["", Validators.required],
    category: ["", Validators.required],
    image: [""],
    tags: [""]
  });


  constructor(private articleService: ArticleService, private fb: FormBuilder) { }

  ngOnInit() {
    this.articleService.getCategory().subscribe(result => {
      this.category = result;
      console.log(result);  
    });
  }

  onSubmitCreateA(f: NgForm) 
  {
    this.articleService.createArticle(f.value).subscribe(result => {
      const alert = document.getElementById("alert");
      alert.classList.remove("d-none");
      alert.style.display = "block";
      alert.innerHTML = result;
    },(err: HttpErrorResponse) => {
      if(err.status == 400)
        console.log(err);
        const alert = document.getElementById("alertD");
        alert.classList.remove("d-none");
        alert.style.display = "block";
        alert.innerHTML = err.error;
    });
  }

  onSubmitCreateC(g: NgForm) 
  {
    this.articleService.createCategorie(g.value).subscribe(result => {
      document.location.reload(true);
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
