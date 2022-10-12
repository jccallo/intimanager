<template>
    <div class="content-wrapper">
    <section class="content-header">
      <!-- container-fluid -->
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de Personas <small class="spinner-border text-muted" v-if="loading"></small></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#" type="submit" class="btn btn-info">Agregar Nuevo</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre Completo</th>
                      <th>Telefono</th>
                      <th>Direccion</th>
                      <th>Correo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="friend in friends" :key="friend.id">
                      <th>{{ friend.id }}</th>
                      <td>{{ friend.nombre }}</td>
                      <td>{{ friend.telefono }}</td>
                      <td>{{ friend.direccion }}</td>
                      <td>{{ friend.correo }}</td>
                      <td>
                        <div style="width: 110px; display: inline-block;">
                        <a
                          href="#"
                          type="submit"
                          class="btn btn-secondary btn-sm"
                          ><i class="fas fa-eye"></i
                        ></a>
                        <a href="#" type="submit" class="btn btn-info btn-sm"
                          ><i class="fas fa-edit"></i
                        ></a>
                        <a href="#" type="submit" class="btn btn-danger btn-sm"
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
export default {
  data() {
    return {
      friends: [],
      loading: false,
    };
  },
  created: function () {
    this.loading = true
    this.index();
  },
  methods: {
    index() {
      this.axios
        .get(`http://127.0.0.1:8000/api/friends`)
        .then((res) => {
          this.friends = res.data.data;
          this.loading=false;
          console.log(res.data.data);

            $(function() {
            $("#example2").DataTable({
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

        })
        .catch((res) => console.log(res));
    },
  },
};
</script>
