import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { ArticleComponent } from "./article/article.component";
import { EditComponent } from './edit/edit.component';
import { CreatearticleComponent } from './createarticle/createarticle.component';
import { AuthComponent } from './auth/auth.component';
import { LoginActivate } from './loginActivate.service';

const routes: Routes = [
  {path: "", component: HomeComponent},
  {path: "articles/:id", component: ArticleComponent},
  {path: "articles/edit/:id", component: EditComponent},
  {path: "create", component: CreatearticleComponent, pathMatch: 'full'},
  {path: "login", component: AuthComponent, pathMatch: 'full', canActivate:[LoginActivate]}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
