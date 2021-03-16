import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { UserAgencePageRoutingModule } from './user-agence-routing.module';

import { UserAgencePage } from './user-agence.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    UserAgencePageRoutingModule
  ],
  declarations: [UserAgencePage]
})
export class UserAgencePageModule {}
