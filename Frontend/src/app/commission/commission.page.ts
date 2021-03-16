import { Component, OnInit } from '@angular/core';
import { ColumnMode } from '@swimlane/ngx-datatable';
import { TransactionService } from '../transaction/transaction.service';

@Component({
  selector: 'app-commission',
  templateUrl: './commission.page.html',
  styleUrls: ['./commission.page.scss'],
})
export class CommissionPage implements OnInit {
  
  rows: any = [];
  ColumnMode = ColumnMode;
  commission : number =0;
  // rows2 :any = { donnees : {}};
  // columns = [{ prop: 'date' }, { name: 'utilisateur' }, { name: 'type' }, { name: 'montant' }, { name: 'frais' }];

  constructor( private transactionservice: TransactionService) { }

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
          if (res[i]['agentDepot'].charAt(res[i]['agentDepot'].length - 1) == localStorage.getItem('id')) {
            r['date'] = res[i]['dateDepot'].substring(0,10);
            r['type'] = "Dépôt";
            r['montant']= res[i]['partAgenceDepot'];
            this.commission+=res[i]['partAgenceDepot'];

          }else{
            r['date'] = res[i]['dateRetrait'].substring(0,10);
            r['type'] = "Retrait";
            r['montant']= res[i]['partAgenceRetrait'];
            this.commission+=res[i]['partAgenceRetrait'];
            
          }
          console.log(r);
          this.rows.push(r);
          this.rows=[...this.rows];
          console.log(this.rows);

        }
     
      }
    );
  }

}
