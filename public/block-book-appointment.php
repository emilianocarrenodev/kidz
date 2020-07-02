<section class="block-book-appointment">
    <div class="container">
        <div class="section-form item-1">
            <form id="form-book-appointment" action="send-book-appointment.php" method="POST">
                <div class="row">
                    <div class="col-12">
                        <h2>Reserva Tu Cita</h2>
                        <p>Si percibes que tu hijo o hija tiene mucho que ofrecer pero podemos<br>ayudarte a reforzar aspectos para su futuro, Reserva tu cita.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                        <div class="form-timeline mx-center">
                            <span class="timeline-1 active">1.Datos</span>
                            <span class="timeline-2">2.Servicio</span>
                            <span class="timeline-3">3.Horario</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-items form-items-0">
                            <h3>Datos personales</h3>
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label for="formName">Nombre</label>
                                        <input type="text" class="form-control" id="formName" name="name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label for="formPhone">Teléfono</label>
                                        <input type="text" class="form-control" id="formPhone" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label for="formEmail">Email</label>
                                        <input type="email" class="form-control" id="formEmail" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <p class="text-form-info">Ingresa tus datos para comenzar tu agendamiento <a href="" target="_blank">ver políticas de datos personales</a></p>
                        </div>
                        <div class="form-items form-items-1 d-none">
                            <h3>Qué servicio te interesa</h3>
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label for="formCategory">Categoría</label>
                                        <select class="form-control" id="formCategory" name="category">
                                            <option value="Virtual">Virtual</option>
                                            <option value="Domicilio">Domicilio</option>
                                            <option value="Presencial">Presencial</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label for="formService">Servicio</label>
                                        <select class="form-control" id="formService" name="service">
                                            <option value="Neuropsicología– Evaluacion Psicoeducativa" selected>Neuropsicología– Evaluacion Psicoeducativa</option>
                                            <option value="Terapia Ocupacional">Terapia Ocupacional</option>
                                            <option value="Terapia de Lenguaje–Fonoaudiología">Terapia de Lenguaje–Fonoaudiología</option>
                                            <option value="Psicología">Psicología</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group">
                                        <label for="formTherapist">Terapeuta</label>
                                        <select class="form-control" id="formTherapist" name="therapist">
                                            <option value="Dra. Liliana García">Dra. Liliana García</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p class="text-form-info">Cada categoría tiene asignado un terapeuta y un modo de atención</p>
                        </div>
                        <div class="form-items form-items-2 d-none">
                            <h3>Horarios disponibles</h3>
                            <div class="row">
                                <div class="col-12 col-sm-3">
                                    <div class="form-group">
                                        <label for="formDate">Fecha</label>
                                        <input type="date" class="form-control" id="formDate" name="date" min="2020-06-28">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="btn-group btn-group-toggle mb-4 mb-sm-0" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <span>Lunes</span>
                                            <input type="checkbox" name="optWeek[]" value="Lunes">
                                        </label>
                                        <label class="btn btn-secondary">
                                            <span>Martes</span>
                                            <input type="checkbox" name="optWeek[]" value="Martes">
                                        </label>
                                        <label class="btn btn-secondary">
                                            <span class="ml-n4">Miercoles</span>
                                            <input type="checkbox" name="optWeek[]" value="Miercoles">
                                        </label>
                                        <label class="btn btn-secondary">
                                            <span>Jueves</span>
                                            <input type="checkbox" name="optWeek[]" value="Jueves">
                                        </label>
                                        <label class="btn btn-secondary">
                                            <span>Viernes</span>
                                            <input type="checkbox" name="optWeek[]" value="Viernes">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="form-group">
                                        <label for="formSchedule">Horario</label>
                                        <select class="form-control" id="formSchedule" name="schedule">
                                            <option value="08:00 AM">08:00 AM</option>
                                            <option value="09:00 AM">09:00 AM</option>
                                            <option value="10:00 AM">10:00 AM</option>
                                            <option value="11:00 AM">11:00 AM</option>
                                            <option value="12:00 AM">12:00 AM</option>
                                            <option value="01:00 PM">01:00 PM</option>
                                            <option value="02:00 PM">02:00 PM</option>
                                            <option value="03:00 PM">03:00 PM</option>
                                            <option value="04:00 PM">04:00 PM</option>
                                            <option value="05:00 PM">05:00 PM</option>
                                            <option value="06:00 PM">06:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p class="text-form-info">Escoge la fecha y la hora que prefieras para tu cita, este horario estará sujeto a cambios</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 mb-4 mb-sm-0 text-center text-lg-right">
                        <button type="button" class="btn btn-primary btn-back type-opacity">Volver</button>
                    </div>
                    <div class="col-12 col-sm-6 text-center text-lg-left">
                        <button type="submit" class="btn btn-primary">Continuar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="alert alert-danger mb-0 mt-4" role="alert">Faltan campos requeridos, por favor revisar!!!</div>
                    </div>
                </div>
            </form>
        </div>
        <div class="section-form item-2">
            <div class="row">
                <div class="col-12">
                    <div class="content-finish">
                        <h2>Gracias, hemos recibido<br>tu información.</h2>
                        <p>Estaremos comunicándonos<br>para confirmar tu cita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>