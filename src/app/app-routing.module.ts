import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { Medico } from './clases/medico';
import { CitasComponent } from './componentes/citas/citas.component';
import { HomeComponent } from './componentes/home/home.component';
import { LoginComponent } from './componentes/login/login.component';
import { MedicosComponent } from './componentes/medicos/medicos.component';
import { NavegacionComponent } from './componentes/navegacion/navegacion.component';
import { PerfilComponent } from './componentes/perfil/perfil.component';
import { RegistroComponent } from './componentes/registro/registro.component';

const routes: Routes = [
  {path: "", component:HomeComponent},
  {path: "login", component:LoginComponent},
  {path: "perfil", component:PerfilComponent},
  {path: "registrar", component:RegistroComponent},
  {path: "medicos", component:MedicosComponent},
  {path: "citas", component:CitasComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }