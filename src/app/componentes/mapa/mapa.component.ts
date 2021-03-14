import { Component, OnInit } from '@angular/core';
import * as L from 'leaflet';

@Component({
  selector: 'app-mapa',
  templateUrl: './mapa.component.html',
  styleUrls: ['./mapa.component.css']
})
export class MapaComponent implements OnInit {

  mapa: any
  marcador: any
  constructor() { }

  ngOnInit(): void {
    this.mapa = L.map('posicionMapa').setView([39.592017, -3.038692], 16)
    L.marker([39.592017, -3.038692]).addTo(this.mapa).bindPopup('Centro Médico')
    .openPopup();
    const trozos = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
      maxZoom: 19
    })
    trozos.addTo(this.mapa)
    
  }

}
