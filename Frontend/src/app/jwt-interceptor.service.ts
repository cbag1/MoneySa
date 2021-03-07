import { Observable } from 'rxjs';
import { HttpEvent, HttpHandler, HttpInterceptor, HttpRequest } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class JwtInterceptorService implements HttpInterceptor {

  constructor() {}

  intercept(request: HttpRequest<unknown>, next: HttpHandler): Observable<HttpEvent<unknown>> {

    let jwt = JSON.parse(localStorage.getItem('jwt'));
    console.log(jwt);
        if (jwt) {
          // console.log(jwt);
          // console.log(jwt.token);
            request = request.clone({
                setHeaders: {
                    Authorization: `Bearer ${jwt.token}`
                }
            });
        }
        // console.log(request);
    return next.handle(request);
  }
}
