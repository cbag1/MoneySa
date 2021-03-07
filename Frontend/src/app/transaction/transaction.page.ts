import { DepotService } from './../depot/depot.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-transaction',
  templateUrl: './transaction.page.html',
  styleUrls: ['./transaction.page.scss'],
})
export class TransactionPage implements OnInit {

  transactions: any = {};

  constructor(private depotservice: DepotService) { }

  ngOnInit() {
    this.initList();
  }

  initList(){
    this.depotservice.getTransaction().subscribe(res => {
      this.transactions = res['hydra:member'];
      // this.profils = Array.of(this.profils);
      console.log("test transactions ");
      console.log(this.transactions);
    });
  }

}
