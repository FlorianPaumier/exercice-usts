import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Test_USTS';
  log = localStorage.getItem("email");

  
  logout() {
    localStorage.removeItem("email");
    document.location.reload(true);
  }
}
