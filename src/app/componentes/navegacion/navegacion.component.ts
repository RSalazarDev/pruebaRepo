import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { UsuariosService } from 'src/app/servicios/usuarios.service';

@Component({
  selector: 'app-navegacion',
  templateUrl: './navegacion.component.html',
  styleUrls: ['./navegacion.component.css']
})
export class NavegacionComponent implements OnInit {

  constructor(private irHacia:Router,private servicioU:UsuariosService,) { }

  ngOnInit(): void {
  }

  
  isLogged():boolean {
    return this.servicioU.isLogged()
  }

  logout() {
    this.servicioU.logOut()
    this.irHacia.navigate(['/login'])
  }
  
}
