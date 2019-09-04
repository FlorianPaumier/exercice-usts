import { Component, OnInit } from '@angular/core';
import { ArticleService } from '../article/article.service';
import { Router, ActivatedRoute, ParamMap } from '@angular/router';
import { switchMap } from 'rxjs/operators';



@Component({
  selector: 'app-article',
  templateUrl: './article.component.html',
  styleUrls: ['./article.component.css']
})
export class ArticleComponent implements OnInit {

  private article = [];

  constructor(private articleService: ArticleService, private route: ActivatedRoute) { }

  ngOnInit() {
    let id = this.route.snapshot.paramMap.get('id');
    this.articleService.findOneById(id).subscribe(result => {
      this.article = result;
      console.log(this.article);
    });
  }
}
