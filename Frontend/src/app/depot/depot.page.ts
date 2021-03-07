import { DepotService } from './depot.service';
import { Router } from '@angular/router';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Component, OnInit } from '@angular/core';
import { AuthService } from '../login/auth.service';

@Component({
  selector: 'app-depot',
  templateUrl: './depot.page.html',
  styleUrls: ['./depot.page.scss'],
})
export class DepotPage implements OnInit {

  form: FormGroup;
  segment = "emetteur";

  constructor(private auth: AuthService, private router: Router, private depotservice:DepotService) { }

  ngOnInit() {
    this.initForm();
  }

  initForm() {
    this.form = new FormGroup({
      montant: new FormControl('', {
        updateOn: 'blur',
        validators: [Validators.required,Validators.minLength(1)]
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
  loginProcess() {
    console.log("Test");
    // console.log(this.form.value.client.cni_client);
    this.form.value.client.telBeneficiaire=this.form.value.client.telBeneficiaire.toString();
    this.form.value.client.telClient=this.form.value.client.telClient.toString();
    this.form.value.client.cniClient=this.form.value.client.cniClient.toString();

    // console.log(this.form.status);
    console.log(this.form.value);

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
