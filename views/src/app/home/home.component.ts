import { Component, OnInit } from '@angular/core';
import { ArticleService } from '../article/article.service';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  private articles: [];

  constructor(private articleService: ArticleService) {
   }

  ngOnInit() {
    this.articleService.getAllData().subscribe(result => {
      this.articles = result;
    });
  }

  onClick($id) {
    this.articleService.deleteArticle($id).subscribe(result => {
      this.articles = result;
      document.location.reload(true);
    });
  }
}
