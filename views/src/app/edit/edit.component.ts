import { Component, OnInit } from '@angular/core';
import { NgForm, Validators } from '@angular/forms';
import { ArticleService } from '../article/article.service';
import { Router, ActivatedRoute, ParamMap } from '@angular/router';
import { FormBuilder } from '@angular/forms';


@Component({
  selector: 'app-edit',
  templateUrl: './edit.component.html',
  styleUrls: ['./edit.component.css']
})
export class EditComponent implements OnInit {

  private article : [];
  private category : [];
  form = this.fb.group({
    title: ["", Validators.required],
    content: ["", Validators.required, Validators.minLength(6)],
    category: ["", Validators.required],
    image: [""],
    tags: [""]
  });

  constructor(private articleService: ArticleService, private route: ActivatedRoute, private fb: FormBuilder) { }

  ngOnInit() {
    let id = this.route.snapshot.paramMap.get('id');

    this.articleService.getCategory().subscribe(result => {
      this.category = result;
      console.log(result);  
    });

    this.articleService.findOneById(id).subscribe(result => {
      this.article = result;
      console.log(this.article);
    });
  }

  onSubmit(f: NgForm) 
  {
    let id = this.route.snapshot.paramMap.get('id');
    this.articleService.updateArticle(id, f.value).subscribe(result => {
      this.article = result;
      document.location.reload(true);
    });
  }

}
