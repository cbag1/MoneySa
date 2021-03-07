import { AuthService } from './../login/auth.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-admin-agence',
  templateUrl: './admin-agence.page.html',
  styleUrls: ['./admin-agence.page.scss'],
})
export class AdminAgencePage implements OnInit {

  private iduser = localStorage.getItem('id');
  private agence:any;

  constructor( private authservice:AuthService) {
  }

  ngOnInit() {
    this.initList();
  }

  initList(){
    this.authservice.getUser(this.iduser).subscribe(res => {
      this.agence = res['hydra:member'];
      // this.profils = Array.of(this.profils);
      console.log("test agence");
      console.log(this.agence);
    });
  }

}
