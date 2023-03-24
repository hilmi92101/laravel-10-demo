const DemoMessage = (echo) => { 
    echo.channel('demo-message')
    .listen('.demo-message-event', (e) => {
        console.log(e);
    }).error((error) => {
        console.error(error);
    });
}

export default DemoMessage;