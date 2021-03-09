import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from '../login/auth.service';
import { TransactionService } from '../transaction/transaction.service';

@Component({
  selector: 'app-retrait',
  templateUrl: './retrait.page.html',
  styleUrls: ['./retrait.page.scss'],
})
export class RetraitPage implements OnInit {

  form: FormGroup;
  segment = "beneficiaire";
  code: string;

  informations: any = {};
  client: any = {};

  constructor(private auth: AuthService, private router: Router, private transactionservice: TransactionService) { }

  ngOnInit() {

    this.initForm();
  }

  initForm() {
    this.form = new FormGroup({

      cniBeneficiaire: new FormControl('', {
        updateOn: 'blur',
        validators: [Validators.required]
      })

    });
  }


  segmentChanged(event) {
    console.log(this.segment);

    console.log(event);
  }

  onKeydown(event) {
    if (event.key === "Enter") {
      console.log(event);
      console.log(this.code);
      this.transactionservice.getTransaction(this.code).subscribe(
        response => {

          this.informations = response[0];
          this.client = this.informations.client;
          console.log(this.informations);
          console.log(this.client);

        },
        error => {
          console.log(error);
        }

      );

    }
  }


  retraitProcess() {
    console.log(this.form.value);
    this.transactionservice.updateTransaction(this.informations.id, {}).subscribe(
      response => {
        console.log(response);
      },
      error => {
        console.log(error);
      }
    );
    this.transactionservice.updateClient(this.client.id, this.form.value).subscribe(
      response => {
        console.log(response);
      },
      error => {
        console.log(error);
      }
    );
  }


}
