import { HttpClient } from '@angular/common/http';
import { Component, OnInit, ViewChild } from '@angular/core';
import { NgForm } from '@angular/forms';
import { MatMenuTrigger } from '@angular/material/menu';
import { MatSidenav } from '@angular/material/sidenav';
import { MatIcon } from '@angular/material/icon';


@Component({
  selector: 'app-manager',
  templateUrl: './manager.component.html',
  styleUrl: './manager.component.css',

})
export class ManagerComponent implements OnInit {
  totalClients: number=100;
  totalReservations: number=70;
  recentActivities: string[]=['Ajouter client', 'Créer Reservation', 'Modifier Reservation'];
  // @ViewChild(MatMenuTrigger) trigger!: MatMenuTrigger;

  // someMethod() {
  //   this.trigger.openMenu();
  // }
  constructor(private http: HttpClient){

  }
  ngOnInit(): void {
    this.getManager();
  }

  getManager(){
    this.http.get('http://localhost:8000/api/manager/dashboard')
    .subscribe((response)=>{
      console.log(response);
    })
  }
  onSubmit(form: NgForm){
    console.log(form.value);
  }


  toggleSidenav(sidenav: MatSidenav) {
    sidenav.toggle();
  }
}
