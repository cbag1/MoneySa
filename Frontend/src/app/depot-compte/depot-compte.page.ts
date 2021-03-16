import { Component, OnInit } from '@angular/core';
import { DepotService } from '../depot/depot.service';

@Component({
  selector: 'app-depot-compte',
  templateUrl: './depot-compte.page.html',
  styleUrls: ['./depot-compte.page.scss'],
})
export class DepotComptePage implements OnInit {

  clientchoisi: any;
  clients : any = [];
  constructor(private depotservice: DepotService) { }

  ngOnInit() {
    this.initList();
  }


  initList() {

    this.depotservice.getClients().subscribe(
      res => {
        // this.clients=res['hydra:member'];
        // console.log(res);
        for (var i in res['hydra:member']){
          let r = {};
          r['id']=res['hydra:member'][i]['id'];
          r['montant']= res['hydra:member'][i]['montant'];
          r['client']= res['hydra:member'][i]['user']['username'];
          // console.log(r['montant']);
          r['agence']= res['hydra:member'][i]['agence']['nom'];
          this.clients.push(r);
          this.clients= [...this.clients];

        }
        // this.profils = Array.of(this.profils);
        console.log(this.clients);
        console.log("test agence");
        // console.log(res);
        // this.montant=this.agence.compte.montant;
        // console.log(this.montant);
        // console.log(this.agence);
      });
  }

  onChange(event){
    console.log(this.clientchoisi)
    this;this.depotservice.getOneClient(this.clientchoisi).subscribe(
      res => {
        console.log("test");
      });
  }

}
