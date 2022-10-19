function computeLoan(){
    //The global constants of some class functions(value) are determined using the following three line codes
    const amount = document.querySelector('#amount').value;
    const interest_rate = document.querySelector('#interest_rate').value;
    const months = document.querySelector('#months').value;
    
    //The interest rate has been calculated.
    //The total amount of interest per month has been calculated by the following calculation.
    //That calculation is stored in a constant called "interest"
    const interest = (amount * (interest_rate * 0.01)) / months;
    
    //The bottom line calculates how much to pay each month.
    //Here the total amount is divided by the month (which you will input) and the monthly interest is added to it.
    //All these calculations are stored in a constant called "payment".     
    let payment = ((amount / months) + interest).toFixed(2); 
    
    //regedit to add a comma after every three digits
    //That is, a comma (,) will be added after every three numbers.
    //Example 50,000
    payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","); 
    
    //With the help of innerHTML, the information stored in the "payment" is displayed on the webpage.
    document.querySelector('#payment').innerHTML = `Monthly Payment = ${payment}`
    } 
    /*
    // Listen for submit
document.getElementById('loan-form').addEventListener('submit', calculateResults);

// Calculate Results
function calculateResults(e){

// console.log("calculating");

// Declare UI Variables

const amount = document.getElementById('amount');
const interest = document.getElementById('interest');
const years = document.getElementById('years');
const monthlyPayment = document.getElementById('monthly-payment');
const totalPayment = document.getElementById('total-payment');
const totalInterest = document.getElementById('total-interest');

// Turn amount into decimal and store it into variable
const principal = parseFloat(amount.value);
const calculatedInterest = parseFloat(interest.value) /100 / 12;
const calculatedPayment =  parseFloat(years.value) * 12;

// Compute monthly payments
const x = Math.pow(1 + calculatedInterest, calculatedPayment);
const monthly = (principal * x * calculatedInterest)/(x-1);


// Check if value is finite

if(isFinite(monthly)){
	monthlyPayment.value = monthly.toFixed(2);
	totalPayment.value = (monthly * calculatedPayment).toFixed(2);
	totalInterest.value = ((monthly * calculatedPayment) - principal).toFixed(2);

} else{
	showError("Please check your numbers")
}

e.preventDefault();
}

// Function to show error
function showError(error){
	// create div
	const errorDiv = document.createElement('div');

	// Get card and heading in order to add new div to DOM. Parent element
	const card = document.querySelector('.card');
	const heading = document.querySelector('.heading');


	// Give div a class name
	errorDiv.className = 'alert alert-danger';

	// Create text and append div
	errorDiv.appendChild(document.createTextNode(error));

	// Insert error above heading. Insert above will take in the parent element which is the card in this case and for the parameters
	// It will take in the element you want to put in and the element you want to put it before, in this case errorDiv and the heading

	card.insertBefore(errorDiv, heading);

	// Clear error after 3 seconds

	setTimeout(clearError, 3000);

}


// Create clear error
function clearError(){
	document.querySelector('.alert').remove();
}
*/