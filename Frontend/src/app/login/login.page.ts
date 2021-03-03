import { Router } from '@angular/router';
import { AuthService } from './auth.service';
import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import jwt_decode from "jwt-decode";


@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {

  form: FormGroup;
  constructor(private auth: AuthService, private router: Router) { }

  ngOnInit() {
    this.initForm();
  }

  initForm() {
    this.form = new FormGroup({
      username: new FormControl('', {
        updateOn: 'blur',
        validators: [Validators.required]
      }),
      password: new FormControl('', {
        updateOn: 'blur',
        validators: [Validators.required]
      }),
    })
  }

  loginProcess() {
    console.log(this.form.value);
    console.log("test");
    this.auth.login(this.form.value).subscribe(result => {
      console.log(result);
      var token_decode = jwt_decode(result['token']);

      switch (token_decode['roles'][0]) {


        case "ROLE_ADMIN":
          this.router.navigate(['/admin-agence']);
          break;


      }


    });
  }




}
