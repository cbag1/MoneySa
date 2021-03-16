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

  // //hide nav bar when we enter the page
  // onPageWillEnter() {
  //   console.log("Page in console");
  //   document.getElementById("menu-bas").style.display="None";
  // }

  // //show nav bar when we leave the page
  // onPageDidLeave() {
  //   document.getElementById("menu-bas").style.display="block";
  // }

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
    // console.log("test");
    this.auth.login(this.form.value).subscribe(result => {
      // console.log(result);
      var token_decode = jwt_decode(result['token']);
      console.log(token_decode);
      localStorage.setItem('id', token_decode['id']);
      console.log((localStorage.getItem('id')));
      switch (token_decode['roles'][0]) {


        case "ROLE_ADMIN_AGENCE":
          this.router.navigate(['/admin-agence']);
          break;

        case "ROLE_CLIENT":
          this.router.navigate(['/user-agence']);
          break;




      }


    });
  }




}
