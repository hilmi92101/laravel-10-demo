const GetVisitorToken = () => { 

    return axios.post(route('visitor.getToken'))
    .then((response) => {
        let token = response.data.token;
        return token;
    })
    .catch((error) => {
        console.log(error.response);
        console.log(error.response.data);
        throw error;
    });
}

export default GetVisitorToken;