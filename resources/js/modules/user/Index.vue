<template>
  <div class="content-wrapper">
    <section class="content-header">
      <!-- container-fluid -->
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              Lista de Personal
              <small class="spinner-border text-muted" v-if="loading"></small>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <router-link class="btn btn-info" :to="{ name: 'user-create' }">
                  Agregar Nuevo
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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="list-users" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre Completo</th>
                      <th>Dni</th>
                      <th>Telefono</th>
                      <th>Tipo Trabajador</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                      <th>{{ user.id }}</th>
                      <td>{{ user.name }}</td>
                      <td>{{ user.dni }}</td>
                      <td>{{ user.telefono }}</td>
                      <td>
                        {{
                          user.tipo_trabajador == 0
                            ? null
                            : user.tipo_trabajador == 1
                            ? "Permanente"
                            : "Externo"
                        }}
                      </td>
                      <td>
                        <div style="width: 110px; display: inline-block">
                          <router-link
                            class="btn btn-secondary btn-sm"
                            :to="{ name: 'user-show', params: { id: user.id } }"
                          >
                            <i class="fas fa-eye"></i>
                          </router-link>
                          <router-link
                            class="btn btn-info btn-sm"
                            :to="{ name: 'user-edit', params: { id: user.id } }"
                          >
                            <i class="fas fa-edit"></i>
                          </router-link>
                          <a
                            href="#"
                            type="submit"
                            class="btn btn-danger btn-sm"
                            ><i class="fas fa-trash"></i
                          ></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
  </div>
</template>

<script>
import userService from "./userService";

export default {
  data() {
    return {
      users: [],
      loading: false,
    };
  },
  created: function () {
    this.loading = true;
    this.index();
  },
  methods: {
    index() {
      userService.index().then((res) => {
        if (!res.ok) console.log(res.msg); // se puede direccionar y/o imprimir un error
        this.users = res.data;
        this.loading = false;

        $(function () {
          $("#list-users").DataTable({
            paging: true, // habilita la paginacion
            lengthChange: true, // habilita la cantidad de filas mostradas por pagina
            searching: true, // habilita la caja de busqueda
            ordering: true, // habilita para que las columnas se puedan ordenar desde la cabera de la tabla
            info: true, // habilita la oracion de la cantidad de resultados
            autoWidth: false, // generalmente deforma lo responsive de la tabla, usar con cuidado
            responsive: true, // habilita responsive de la tabla
            language: {
              url: "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-MX.json", // para traducir datatables
            },
          });
        });
      });
    },
  },
};
</script>
