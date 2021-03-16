import { DepotService } from './../depot/depot.service';
import { Component, OnInit } from '@angular/core';
import { TransactionService } from './transaction.service';
import { ColumnMode } from '@swimlane/ngx-datatable';

@Component({
  selector: 'app-transaction',
  templateUrl: './transaction.page.html',
  styleUrls: ['./transaction.page.scss'],
})
export class TransactionPage implements OnInit {

  transactions: number = 0;
  rows: any = [];
  ColumnMode = ColumnMode;
  // rows2 :any = { donnees : {}};
  // columns = [{ prop: 'date' }, { name: 'utilisateur' }, { name: 'type' }, { name: 'montant' }, { name: 'frais' }];

  constructor(private depotservice: DepotService, private transactionservice: TransactionService) { }

  ngOnInit() {
    this.initList();
  }

  initList() {


    this.transactionservice.getTransactionByUser(+localStorage.getItem('id')).subscribe(
      res => {
        console.log("test transactions ");
        console.log(res);
        // let j=0;
        for (var i in res) {
          let r = {};
          
          
          r['montant'] = res[i]['montant'];
          this.transactions += res[i]['montant'];
          r['frais'] = this.transactionservice.getFrais(r['montant']);
          if (res[i]['agentDepot'].charAt(res[i]['agentDepot'].length - 1) == localStorage.getItem('id')) {
            r['date'] = res[i]['dateDepot'].substring(0, 10);
            r['utilisateur'] = res[i]['client']['nomClient'];
            r['type'] = "Dépôt";

          } else {
            r['date'] = res[i]['dateRetrait'].substring(0, 10);
            r['utilisateur'] = res[i]['client']['nomBeneficiaire'];
            r['type'] = "Retrait";

          }
          console.log(r);
          this.rows.push(r);
          this.rows = [...this.rows];
          console.log(this.rows);

        }

      }
    );
  }

}
