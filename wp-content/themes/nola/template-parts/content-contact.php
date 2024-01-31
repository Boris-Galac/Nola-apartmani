 <section class="contact p-block-6" id="contact">
     <div class="container">
         <div class="contact__wrapper">
             <div class="contact__col contact__col--contact">
                 <h2 class="h2-headng dark-text contact__heading">
                     Kontaktirajte nas
                 </h2>
                 <?php

if(is_active_sidebar('sidebar-1')){
			    dynamic_sidebar('cf-7');
			    }
                ?>
             </div>
             <div class="contact__col contact__col--info">
                 <h2 class="h2-heading contact-info__heading">Kontakt podaci</h2>
                 <div class="contact__col--info__wrapper">
                     <div class="contact__col--info__info">
                         <img src="/wp-content/themes/nola/src/assets/icons/mdi_location.svg" aria-hidden="true"
                             class="icon" />
                         <div>
                             <h3 class="text-bright">Lokacija</h3>
                             <p class="info">32100 Vinkovci, Vladimira Nazora 24</p>
                         </div>
                     </div>
                     <div class="contact__col--info__info">
                         <img src="/wp-content/themes/nola/src/assets/icons/phone-icon.svg" aria-hidden="true"
                             class="icon" />
                         <div>
                             <h3 class="text-bright">Telefon</h3>
                             <p class="info">098 842 466</p>
                         </div>
                     </div>
                     <div class="contact__col--info__info">
                         <img src="/wp-content/themes/nola/src/assets/icons/mail-icon.svg" aria-hidden="true"
                             class="icon" />
                         <div>
                             <h3 class="text-bright">Email</h3>
                             <p class="info">katica.siric@gmail.com</p>
                         </div>
                     </div>
                     <div class="socials">
                         <h3 class="socials__heading">Pronađite nas i na društvenim mrežama</h3>
                         <div class="socials__wrapper">
                             <div class="social">
                                 <a target="_blank"
                                     href="https://www.facebook.com/profile.php?id=100063551193779&locale=hr_HR"><img
                                         class="icon" src="/wp-content/themes/nola/src/assets/icons/fb-icon.svg"
                                         alt="socials"></a>
                             </div>
                             <div class="social">
                                 <a target="_blank" href="tel:+38598842466"><img class="icon"
                                         src="/wp-content/themes/nola/src/assets/icons/whatsapp-icon.svg"
                                         alt="socials"></a>
                             </div>
                             <div class="social">
                                 <a target="_blank" href="tel:+38598842466"><img class="icon"
                                         src="/wp-content/themes/nola/src/assets/icons/viber-icon.svg"
                                         alt="socials"></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>