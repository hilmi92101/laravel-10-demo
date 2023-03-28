import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

//window.Pusher = Pusher;

const echoConfig = {
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
    wsHost: import.meta.env.VITE_PUSHER_HOST || `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME || 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
    encrypted: true,
    // authEndpoint: '/api/broadcasting/auth',
    // auth: {
    //     headers: {
    //         'Authorization': 'Bearer ' + localStorage.getItem('visitorToken')
    //     }
    // }
    authorizer: (channel, options) => {
        return {
            authorize: (socketId, callback) => {
                var data = {
                    socket_id: socketId,
                    channel_name: channel.name
                }
                let config = {  
                    headers: {  
                        'Accept': 'application/json',  
                        'Authorization': 'Bearer ' + localStorage.getItem('visitorToken'),  
                    }  
                }

                axios.post('/api/broadcasting/auth', data, config)
                .then(response => {
                    callback(false, response.data);
                })
                .catch(error => {
                    callback(true, error);
                });
            }
        };
    },
    
};

const EchoObjPresence = new Echo(echoConfig);

export default EchoObjPresence;