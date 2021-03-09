import { AuthService } from './../login/auth.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-admin-agence',
  templateUrl: './admin-agence.page.html',
  styleUrls: ['./admin-agence.page.scss'],
})
export class AdminAgencePage implements OnInit {

  private iduser = localStorage.getItem('id');
  private agence: any;
  private montant;
  private datemodification;

  constructor(private authservice: AuthService) {
  }

  ngOnInit() {
    this.initList();
    this.getDateNow();
  }

  getDateNow(){
    let date=new Date();
    this.datemodification ="Mise à jour le "+date.getDate()+"/"+date.getMonth()+"/"+date.getFullYear()+" à "+date.getHours()+":"+date.getMinutes();

  }

  initList() {
    this.authservice.getUser(this.iduser).subscribe(res => {
      this.agence = res[0];
      // this.profils = Array.of(this.profils);
      console.log("test agence");
      // console.log(res);
      this.montant=this.agence.compte.montant;
      console.log(this.montant);
      console.log(this.agence);
    });
  }

}
