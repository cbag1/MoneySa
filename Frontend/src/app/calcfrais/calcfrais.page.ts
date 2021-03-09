import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { AlertController } from '@ionic/angular';
import { TransactionService } from '../transaction/transaction.service';

@Component({
  selector: 'app-calcfrais',
  templateUrl: './calcfrais.page.html',
  styleUrls: ['./calcfrais.page.scss'],
})
export class CalcfraisPage implements OnInit {

  form: FormGroup;

  constructor(private transactionservice: TransactionService, private alertCtrl: AlertController) { }

  ngOnInit() {
    this.initForm();
  }

  initForm() {
    this.form = new FormGroup({
      montant: new FormControl('', {
        updateOn: 'blur',
        validators: [Validators.required, Validators.minLength(1)]
      })
    });
  }

  async calcProcess() {

    let frais = this.transactionservice.getFrais(this.form.value.montant);

    const alert = await this.alertCtrl.create({
      header: 'Montant Frais!',
      subHeader: 'Le montant des frais est egal à : ' + frais,
      buttons: ['OK']
    });
    await alert.present();

  }

}
