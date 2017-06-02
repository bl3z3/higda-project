new Vue({
	el: ".form-group",

	data: {
		year: 'year',
		elections: {
			//2017 elections
			year: [
				{
	              latLng: [-1.95, 30.05], //Rwanda
	              name: 'Presidential August 4th, 2017',
	            },
	            {
	              latLng: [-8.833333333, 13.216667], //Angola
	              name: 'General election: most likely August 2017'
	            },
	            {
	              latLng: [12.1, 15.033333], //Chad
	              name: 'Parliamentary election, unknown date, 2017'
	            },
	            {
	              latLng: [0.383333333, 9.45], //Gabon
	              name: 'Parliamentary elections July 29th, 2017'
	            },
	            {
	              latLng: [-1.283333333, 36.816667], //Kenya
	              name: 'General elections August 8th, 2017'
	            },
	            {
	              latLng: [2.066666667, 45.333333 ], //Somalia
	              name: 'General election scheduled for March 27, 2017'
	            },
	            {
	              latLng: [6.3, -10.8], //Liberia
	              name: 'general and parliamentary election, October 10th, 2017'
	            },
	            {
	              latLng: [8.483333333, -13.233333], //Sierra Leone
	              name: 'general election 2017'
	            },
	            {
	              latLng: [13.45, -16.566667], //Gambia
	              name: 'legislative, planned for April 6th or April 12th, 2017'
	            },
	            {
	              latLng: [14.73333333, -17.633333], //Senegal
	              name: 'legislative; July 2nd, 2017'
	            },
	            {
	              latLng: [-26.31666667, 31.133333], //Swaziland
	              name: 'most likely September 2017'
	            },
	            {
	              latLng: [-18.91666667, 47.516667], //Madagascar
	              name: 'legislative, possibly December 2017'
	            },
	            {
	              latLng: [36.8, 10.183333], //Tunisia
	              name: 'municipal and regional elections, probably October 2017'
	            },
	            {
	              latLng: [36.75, 3.05], //Algeria
	              name: 'legislative elections, either April or May 2017'
	            },
			],

			year: [
				{
		            latLng: [-4.316666667, 15.3], //DRC
		            name: 'Probably in 2017; mysterious forecast (worst case: Dec. 2018)',
		        },
		        {
		            latLng: [12.65, -8], //Mali
		            name: 'presidential and legislative planned for 2018'
		        },
		        {
		            latLng: [6.116666667, 1.216667], //Togo
		            name: 'presidential: 2020. parliamentary: probably 2018'
		        },
			],

			year: [
				{
		            latLng: [-3.366666667, 29.35], //Burundi
		            name: ' No elections anytime soon'
		        },
		        {
		            latLng: [15.33333333, 38.933333], //Eritrea
		            name: 'No elections anytime soon'
		        },
		        {
		            latLng: [9.033333333, 38.7], //Ethiopia
		            name: 'Elections in summer (probably June) of 2020'
		        },
		        {
		            latLng: [6.4833333332, 616667], //Benin
		            name: 'most likely March 2021'
		        },
		        {
		            latLng: [14.91666667, -23.516667], //Cape verde
		            name: 'most likely 2021'
		        },
		        {
		            latLng: [5.55, -0.216667], //Ghana
		            name: 'just had elections in 2016, next one in December 2020'
		        },
		        {
		            latLng: [9.083333333, 7.533333], //Nigeria
		            name: 'most likely February 2019'
		        },
		        {
		            latLng: [-25.7, 28.216667], //South Africa
		            name: 'general elections 2019'
		        },
		        {
		            latLng: [-13.96666667, 33.783333], //Malawi
		            name: '2019'
		        },
		        {
		            latLng: [-17.81666667, 31.033333], //Zimbabwe
		            name: 'no elections planned at the moment (dictatorship)'
		        },
		        {
		          	latLng: [-25.95, 32.583333], //Mozambique
		            name: '2019'
		        },
		        {
		            latLng: [-22.56666667, 17.083333], //Namibia
		            name: '2019'
		        },
		        {
		            latLng: [-24.63333333, 25.9], //Botswana
		            name: '2019'
		        },
		        {
		            latLng: [-29.31666667, 27.483333], //Lesotho
		            name: '2020'
		        },
		        {
		            latLng: [32.88333333, 13.166667], //Libye
		            name: 'no elections planned'
		        },
			]
		}
	},

	methods: {
		//sort election
		sortElection: function () {

		}
	}
})