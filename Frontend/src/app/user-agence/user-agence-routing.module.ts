import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { UserAgencePage } from './user-agence.page';

const routes: Routes = [
  {
    path: '',
    component: UserAgencePage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class UserAgencePageRoutingModule {}
