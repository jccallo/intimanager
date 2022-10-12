<template>
  <div class="content-wrapper">
    <section class="content-header">
      <!-- container-fluid -->
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              Editar Personal
              <small class="spinner-border text-muted" v-if="loading"></small>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <router-link class="btn btn-link" :to="{ name: 'user-index' }">
                  <i class="fas fa-arrow-left"></i> Volver
                </router-link>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <section class="content" v-if="!loading">
      <div class="container-fluid">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Datos de Personal #{{ user.id }}</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal" @submit.prevent="update">
            <div class="card-body">
              <!-- nombre -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombre Completo *</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" v-model="user.name" />
                </div>
              </div>
              <!-- email -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    v-model="user.email"
                  />
                </div>
              </div>
              <!-- dni -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Dni</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" v-model="user.dni" />
                </div>
              </div>
              <!-- telefono -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    v-model="user.telefono"
                  />
                </div>
              </div>
              <!-- fecha de nacimiento -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"
                  >Fecha de Nacimiento</label
                >
                <div class="col-sm-10">
                  <input
                    type="date"
                    class="form-control"
                    v-model="user.fecha_nacimiento"
                  />
                </div>
              </div>
              <!-- Talla de Overol -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Talla de Overol</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    v-model="user.talla_overol"
                  />
                </div>
              </div>
              <!-- Talla de Zapato -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Talla de Zapato</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    v-model="user.talla_zapato"
                  />
                </div>
              </div>
              <!-- Talla -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Talla</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    v-model="user.talla"
                  />
                </div>
              </div>
              <!-- Peso -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Peso</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" v-model="user.peso" />
                </div>
              </div>
              <!-- Direccion -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    v-model="user.direccion"
                  />
                </div>
              </div>
              <!-- Observacion -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Observacion</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    v-model="user.observacion"
                  />
                </div>
              </div>
              <!-- Sueldo Dia -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sueldo Dia</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    v-model="user.sueldo_dia"
                  />
                </div>
              </div>
              <!-- Sueldo Mes -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sueldo Mes</label>
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control"
                    v-model="user.sueldo_mes"
                  />
                </div>
              </div>
              <!-- Tipo de Trabajador -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label"
                  >Tipo de Trabajador</label
                >
                <div class="col-sm-10">
                  <select class="form-control" v-model="user.tipo_trabajador">
                    <option value="0">Selecionar</option>
                    <option value="1">Externo</option>
                    <option value="2">Permanente</option>
                  </select>
                </div>
              </div>
              <!-- Status -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select class="form-control" v-model="user.status">
                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>
                  </select>
                </div>
              </div>
              <!-- places -->
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Procedencia</label>
                <div class="col-sm-10">
                  <select class="form-control" v-model="user.place_id">
                    <option :value="null">Selecionar</option>
                    <option v-for="(value, id) in places" :key="id" :value="id">
                      {{ value }}
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Guardar</button>
              <router-link class="btn btn-default float-right" :to="{ name: 'user-index' }">
                Cancelar
              </router-link>
            </div>
            <!-- /.card-footer -->
          </form>
        </div>
        <!-- /.card -->
      </div>
    </section>
  </div>
</template>

<script>
import userService from "./userService";

export default {
  data() {
    return {
      user: {
        id: 0,
        name: "",
        email: "",
        password: "",
        dni: "",
        telefono: "",
        fecha_nacimiento: "",
        talla: "",
        talla_zapato: "",
        talla_overol: "",
        peso: "",
        direccion: "",
        observacion: "",
        sueldo_dia: "",
        sueldo_mes: "",
        foto_firma: "",
        foto_perfil: "",
        foto_huella: "",
        tipo_trabajador: "",
        status: "",
        place_id: null,
      },
      places: {},
      loading: false,
    };
  },
  created: function () {
    this.loading = true;
    this.create();
    this.show();
  },
  methods: {
    create() {
      userService.create().then((res) => {
        if (!res.ok) console.log(res.msg);
        this.places = res.data.places;
        this.loading = false;
      });
    },
    show() {
      userService.show(this.$route.params.id).then((res) => {
        if (!res.ok) console.log(res.msg);
        this.user = res.data;
        this.user = { ...this.user, ...{ _method: "PUT" } }; // agregamos la correcion
        this.loading = false;
      });
    },
    update() {
      let user = new FormData();
      for (let key in this.user) {
        if (key === "id") continue;
        user.append(key, this.user[key]);
      }
      userService.update(user, this.user.id).then((res) => {
        if (!res.ok) console.log(res.msg);
        this.$router.push({ name: "user-show", params: { id: this.user.id } });
        this.loading = false;
      });
    },
  },
};
</script>
