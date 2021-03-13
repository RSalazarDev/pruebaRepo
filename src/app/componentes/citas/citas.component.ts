import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Cita } from 'src/app/clases/cita';
import { Medico } from 'src/app/clases/medico';
import { CitasService } from 'src/app/servicios/citas.service';
import { MedicosService } from 'src/app/servicios/medicos.service';
import { UsuariosService } from 'src/app/servicios/usuarios.service';

@Component({
  selector: 'app-citas',
  templateUrl: './citas.component.html',
  styleUrls: ['./citas.component.css']
})
export class CitasComponent implements OnInit {

  constructor(private servMedicos: MedicosService,private fb:FormBuilder, private irHacia:Router,private servicioU:UsuariosService,private servCitas:CitasService) { }

  ngOnInit(): void {
    this.obtenerCitas()
    this.obtenerMedicos()
  }
  
  
  citas: Cita[] = []
  medicos: Medico[] = []
  
  isLogged():boolean {
    return this.servicioU.isLogged()
  }

  
  obtenerCitas() {
    this.servCitas.obtenerCitas().subscribe(
      respuesta => {
        console.log(respuesta)
        this.citas = respuesta
      },
      error => console.log(error)
    )
  }
  
  formularioCita = this.fb.group({
    
    fecha:['', Validators.required],
    medico:['', Validators.required]

  })

  

  obtenerMedicos() {
    this.servMedicos.obtenerMedicos().subscribe(
      respuesta => {
        console.log(respuesta)
        this.medicos = respuesta
      },
      error => console.log(error)
    )
  }

  concertarCita() {
    this.servCitas.registrar(this.formularioCita.value).subscribe(
      respuesta => {
        console.log(respuesta)
        this.obtenerCitas()
      },
      error => console.log(error)
    )
  }

  borrarCita(cita: Cita) {
    this.servCitas.borrar(cita).subscribe(
      respuesta => {
        console.log(respuesta)
        this.obtenerCitas()
      },
      error => console.log(error)
    )
  }

  
}
