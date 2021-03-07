import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';
import { AuthGuard } from './login/auth.guard';

const routes: Routes = [
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)
  },
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: 'login',
    loadChildren: () => import('./login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'admin-agence',
    loadChildren: () => import('./admin-agence/admin-agence.module').then( m => m.AdminAgencePageModule),
    canLoad: [AuthGuard]
  },
  {
    path: 'sidemenu',
    loadChildren: () => import('./sidemenu/sidemenu.module').then( m => m.SidemenuPageModule)
  },
  {
    path: 'calcfrais',
    loadChildren: () => import('./calcfrais/calcfrais.module').then( m => m.CalcfraisPageModule),
    canLoad: [AuthGuard]
  },
  {
    path: 'depot',
    loadChildren: () => import('./depot/depot.module').then( m => m.DepotPageModule),
    canLoad: [AuthGuard]
  },
  {
    path: 'transaction',
    loadChildren: () => import('./transaction/transaction.module').then( m => m.TransactionPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
