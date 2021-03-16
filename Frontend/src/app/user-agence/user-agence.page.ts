import { Component, OnInit } from '@angular/core';
import { AuthService } from '../login/auth.service';

@Component({
  selector: 'app-user-agence',
  templateUrl: './user-agence.page.html',
  styleUrls: ['./user-agence.page.scss'],
})
export class UserAgencePage implements OnInit {

montant : number;

  constructor(private authservice: AuthService) { }

  ngOnInit() {
    this.initList();
  }

  initList() {
    this.authservice.getClient(localStorage.getItem('id')).subscribe(
      res => {
        console.log(res[0].agence.compte.montant);
        this.montant=res[0].agence.compte.montant;
      }
    )
  }

}
