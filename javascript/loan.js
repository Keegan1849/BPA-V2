const loanAmountInput = document.querySelector(".loan-amount");
const interestRateInput = document.querySelector(".interest-rate");
const loanTenureRate = document.querySelector(".loan-tenure");

const loanEMIvalue = document.querySelector(".loan-emi .value");
const totalInterestValue = document.querySelector(".loan-interest .value");
const totalAmountValue = document.querySelector(".loan-amount .value");

const calculateBtn = document.querySelector(".calculate-button");

let loanAmount = parseFloat(loanAmountInput.value);
let interestRate = parseFloat(interestRateInput.value);
let loanTenure = parseFloat(interestAmountInput.value);

let interest = interestRate / 12 / 100;

const calculateEMI = () => {
    let emi = 
    loanAmount *
    interest *
    (Math.pow(1 + interest, loanTenure) / 
      (Math.pow(1 + interest, loanTenure) - 1))

    return emi;
};