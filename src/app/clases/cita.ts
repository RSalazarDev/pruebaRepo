import { Medico } from "./medico"
import { Usuario } from "./usuario"

export class Cita {
    id?: number
    medico?: Medico
    usuario?: Usuario
    fecha?: String
    estado?: String
}
