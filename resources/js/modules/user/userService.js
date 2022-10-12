import axiosHttp from "../../axiosHttp";

const userService = {
    baseUrl: "http://127.0.0.1:8001/api/users",
    index() {
        return axiosHttp({
            method: "get",
            url: '/',
            baseURL: this.baseUrl,
        });
    },
    create() {
        return axiosHttp({
            method: "get",
            url: '/create',
            baseURL: this.baseUrl,
        });
    },
    show(id) {
        return axiosHttp({
            method: "get",
            url: `/${id}`,
            baseURL: this.baseUrl,
        });
    },
    update(data, id) {
        return axiosHttp({
            method: "post", // metodo 'post' en lugar de 'put' ya que se le esta mandando la correcion (_method: 'put')
            url: `/${id}`,
            baseURL: this.baseUrl,
            data: data,
        });
    },
    store(data) {
        return axiosHttp({
            method: "post", 
            url: '/',
            baseURL: this.baseUrl,
            data: data,
        });
    },
};

export default userService;
