import { DepotService } from './depot.service';
import { Router } from '@angular/router';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Component, OnInit } from '@angular/core';
import { AuthService } from '../login/auth.service';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-depot',
  templateUrl: './depot.page.html',
  styleUrls: ['./depot.page.scss'],
})
export class DepotPage implements OnInit {

  form: FormGroup;
  segment = "emetteur";

  constructor(private alertCtrl: AlertController, private auth: AuthService, private router: Router, private depotservice: DepotService) { }

  ngOnInit() {
    this.initForm();
  }

  initForm() {
    this.form = new FormGroup({
      montant: new FormControl('', {
        updateOn: 'blur',
        validators: [Validators.required, Validators.minLength(1)]
      }),
      client: new FormGroup({
        cniClient: new FormControl('', {
          updateOn: 'blur',
          validators: [Validators.required]
        }),
        cniBeneficiaire: new FormControl('vide', {
          updateOn: 'blur',
          validators: [Validators.required]
        }),
        nomClient: new FormControl('', {
          updateOn: 'blur',
          validators: [Validators.required]
        }),
        nomBeneficiaire: new FormControl('', {
          updateOn: 'blur',
          validators: [Validators.required]
        }),
        telBeneficiaire: new FormControl('', {
          updateOn: 'blur',
          validators: [Validators.required]
        }),
        telClient: new FormControl('', {
          updateOn: 'blur',
          validators: [Validators.required]
        }),
      })
    })
  }


  segmentChanged(event) {
    console.log(this.segment);

    console.log(event);
  }
  async depotProcess() {
    console.log("Test");
    // console.log(this.form.value.client.cni_client);
    this.form.value.client.telBeneficiaire = this.form.value.client.telBeneficiaire.toString();
    this.form.value.client.telClient = this.form.value.client.telClient.toString();
    this.form.value.client.cniClient = this.form.value.client.cniClient.toString();

    // console.log(this.form.status);
    console.log(this.form.value);
    const alert = await this.alertCtrl.create({
      header: 'Confirmation !',
      subHeader: '  ',
      message: `<ion-item>  
                  <ion-label position='stacked'>
                    Émetteur :  
                  </ion-label>
                  <ion-input type='text' disabled>
                    `+ this.form.value.client.nomClient + `
                  </ion-input>
                </ion-item>
                <ion-item>  
                  <ion-label position='stacked'>
                    Recepteur :  
                  </ion-label>
                  <ion-input type='text' disabled>
                    `+ this.form.value.client.nomBeneficiaire + `
                  </ion-input>
                </ion-item>
                <ion-item>  
                  <ion-label position='stacked'>
                    N CNI :  
                  </ion-label>
                  <ion-input type='text' disabled>
                    `+ this.form.value.client.cniClient + `
                  </ion-input>
                </ion-item>
                <ion-item>  
                  <ion-label position='stacked'>
                    Tél Client :  
                  </ion-label>
                  <ion-input type='text' disabled>
                    `+ this.form.value.client.telClient + `
                  </ion-input>
                </ion-item>
                <ion-item>  
                  <ion-label position='stacked'>
                    Tel Beneficiaire :  
                  </ion-label>
                  <ion-input type='text' disabled>
                    `+ this.form.value.client.telBeneficiaire + `
                  </ion-input>
                </ion-item>
                
                <ion-item>  
                  <ion-label position='stacked'>
                    Montant à envoyer :  
                  </ion-label>
                  <ion-input type='text' disabled>
                    `+ this.form.value.montant + `
                  </ion-input>
                </ion-item>
                
      `,
      buttons: [
        {
          text: 'Annuler',
          role: 'cancel',
          cssClass: 'secondary',
          handler: (blah) => {
            console.log('Confirm Cancel: blah');
          }
        }, {
          text: 'Confirmer',
          handler: () => {
            this.depotservice.addTransaction(this.form.value).subscribe(
              response => {
               
                console.log(response);
              },
              error => {
                console.log(error);
              }
            );
          }
        }
      ]
    });
    await alert.present();

    // this.depotservice.addTransaction(this.form.value).subscribe(
    //   response => {
    //     console.log(response);
    //   },
    //   error => {
    //     console.log(error);
    //   }
    // );
  }

}
