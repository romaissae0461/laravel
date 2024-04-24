import { NgModule } from '@angular/core';
import { BrowserModule, provideClientHydration } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ClientComponent } from './clients/client/client.component';
import { EditComponent } from './clients/edit/edit.component';
import { FormsModule } from '@angular/forms';
import { CreateComponent } from './clients/create/create.component';
import { LoginComponent } from './login/login.component';
import { ChambreComponent } from './chambres/chambre/chambre.component';
import { CreateCComponent } from './chambres/create-c/create-c.component';
import { EditCComponent } from './chambres/edit-c/edit-c.component';
import { ContactComponent } from './contacts/contact/contact.component';
import { ManagerComponent } from './managers/manager/manager.component';
import { ContactClientComponent } from './contacts/contact-client/contact-client.component';
import { CreateRComponent } from './reservations/create-r/create-r.component';
import { ReservationComponent } from './reservations/reservation/reservation.component';
import { PclientComponent } from './pageClient/pclient/pclient.component';
import { ClientPComponent } from './pageClient/client-p/client-p.component';
import { RoomsComponent } from './pageClient/rooms/rooms.component';
import { SlickCarouselModule } from 'ngx-slick-carousel';
import { ServicesComponent } from './services/services.component';
import { PlansComponent } from './plans/plans.component';
import {MatMenuModule} from '@angular/material/menu';
import {MatButtonModule} from '@angular/material/button';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MatSidenavModule } from '@angular/material/sidenav';
import { MatListModule } from '@angular/material/list';
import { MatIconModule } from '@angular/material/icon';
import { CreateReservComponent } from './reservations/create-reserv/create-reserv.component';


@NgModule({
  declarations: [
    AppComponent,
    ClientComponent,
    EditComponent,
    CreateComponent,
    LoginComponent,
    ChambreComponent,
    CreateCComponent,
    EditCComponent,
    ReservationComponent,
    ContactComponent,
    ManagerComponent,
    ContactClientComponent,
    CreateRComponent,
    ClientPComponent,
    PclientComponent,
    RoomsComponent,
    ServicesComponent,
    PlansComponent,
    CreateReservComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule, 
    FormsModule,
    SlickCarouselModule,
    MatButtonModule, 
    MatMenuModule,
    MatSidenavModule,
    MatListModule,
    MatIconModule,
    BrowserAnimationsModule,
    MatButtonModule, 
    MatMenuModule,
  ],
  providers: [
    provideClientHydration()
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
