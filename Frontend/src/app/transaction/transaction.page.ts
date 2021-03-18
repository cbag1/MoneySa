import { DepotService } from './../depot/depot.service';
import { Component, OnInit } from '@angular/core';
import { TransactionService } from './transaction.service';
import { ColumnMode, SelectionType } from '@swimlane/ngx-datatable';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-transaction',
  templateUrl: './transaction.page.html',
  styleUrls: ['./transaction.page.scss'],
})
export class TransactionPage implements OnInit {

  transactions: number = 0;
  rows: any = [];
  ColumnMode = ColumnMode;
  SelectionType = SelectionType;
  selected = [];
  // rows2 :any = { donnees : {}};
  // columns = [{ prop: 'date' }, { name: 'utilisateur' }, { name: 'type' }, { name: 'montant' }, { name: 'frais' }];

  constructor(private alertCtrl: AlertController, private depotservice: DepotService, private transactionservice: TransactionService) { }

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
            r['id'] = res[i]['id'];
            r['valide'] = res[i]['valide'];

          } else {
            r['date'] = res[i]['dateRetrait'].substring(0, 10);
            r['utilisateur'] = res[i]['client']['nomBeneficiaire'];
            r['type'] = "Retrait";

          }
          // console.log(r);
          this.rows.push(r);
          this.rows = [...this.rows];
          // console.log(this.rows);

        }

      }
    );
  }


  async onSelect({ selected }) {

    console.log('Select Event', selected, this.selected);
    // console.log(this.selected[0].valide)
    if (this.selected[0].valide == 0) {
      const alert = await this.alertCtrl.create({
        header: 'Transaction ?',
        message: 'La transaction est toujours en cours ',

        buttons: [
          {
            text: 'Quitter',
            role: 'cancel',
            cssClass: 'secondary',
            handler: () => {
              console.log('Confirm Cancel: ');
            }
          }, {
            text: 'Annuler la Transaction ',
            handler: () => {
              this.transactionservice.deleteTransaction(this.selected[0].id).subscribe(
                response => {
                  console.log(response);
                  this.initList();
                  // this.getCode();
                },
                error => {
                  console.log(error);
                }
              )
            }
          }
        ]


      });

      await alert.present();
    } else {
      if (this.selected[0].valide == 1) {
        const alert = await this.alertCtrl.create({
          message: 'La Transaction est deja retiré !!!',
          buttons: ['Okay']

        });

        await alert.present();
      } else {
        const alert = await this.alertCtrl.create({
          message: 'La Transaction à été annulé !!!',
          buttons: ['Okay']

        });

        await alert.present();
      }
    }
  }
}
