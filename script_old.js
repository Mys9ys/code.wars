// задание 1 ========
// console.log(createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0])) -> "(123) 456-7890"
// мое решение
function createPhoneNumber(numbers){
    return '('+numbers.splice(0,3).join('')+') '+ numbers.splice(0,3).join('') +'-'+ numbers.join('')
}
// интересные решения
function createPhoneNumber(numbers){
    return numbers.reduce((p,c) => p.replace('x',c), "(xxx) xxx-xxxx");
}

createPhoneNumber=n=>'(###) ###-####'.replace(/#/g,()=>n.shift())

function createPhoneNumber(numbers){
    return numbers.join('').replace(/(\d{3})(\d{3})(\d{4})/,'($1) $2-$3');
}

// задание 2 ========
// 942  -->  9 + 4 + 2 = 15  -->  1 + 5 = 6
// мое решение
function digital_root(n) {
    let res = n.toString().split('').reduce((sum,el)=>sum+(+el), 0)
    return res>9 ? digital_root(res) : res
}
// интересные решения
function digital_root(n) {
    return (n - 1) % 9 + 1;
}

function digital_root(n) {
    return--n%9+1;
}


// задание 3 ========
//The binary representation of 1234 is 10011010010, so the function should return 5 in this case

// мое решение
var countBits = function(n) {
    return n.toString(2).split('').reduce((sum,el)=>sum+(+el),0)
};

// интересные решения
countBits = n => n.toString(2).split('0').join('').length;


// задание 4 ========
pigIt('Pig latin is cool'); // igPay atinlay siay oolcay
pigIt('Hello world !');     // elloHay orldway !

// мое решение
function pigIt(str){
    return str.split(' ').map(a=>{
        let first = a.charAt(0)
        return first.toLowerCase().match(/[a-z]/i) ? a.slice(1)+first+"ay" : a
    }).join(" ")
}

// интересные решения
function pigIt(str){
    return str.replace(/(\w)(\w*)(\s|$)/g, "\$2\$1ay\$3")
}

function pigIt(str){
    //Code here
    return str.split(' ').map(word => {
        return word.substring(1) + word[0] + 'ay';
    }).join(' ');
}

// задание 5 ========
a1 = ["arp", "live", "strong"]
a2 = ["lively", "alive", "harp", "sharp", "armstrong"]
// returns ["arp", "live", "strong"]

// мое решение
function inArray(array1,array2){
    return array1.filter(el=>{
        if(array2.filter(el2=>{
            if(el2.indexOf(el)>-1) return el
        }).length) return el
    }).sort()
}

// интересные решения
function inArray(array1,array2){
    return array1
        .filter(a1 => array2.find(a2 => a2.match(a1)))
        .sort()
}

function inArray(a1, a2) {
    var str = a2.join(' ');
    return a1.filter(s => str.indexOf(s) !== -1).sort();
}

// задание 6
toWeirdCase( "String" );//=> returns "StRiNg"
toWeirdCase( "Weird string case" );//=> returns "WeIrD StRiNg CaSe"

// интересные решения
function toWeirdCase(string){
    return string.split(' ').map(function(word){
        return word.split('').map(function(letter, index){
            return index % 2 == 0 ? letter.toUpperCase() : letter.toLowerCase()
        }).join('');
    }).join(' ');
}

// задание 7
uniqueInOrder('AAAABBBCCDAABBB') == ['A', 'B', 'C', 'D', 'A', 'B']
uniqueInOrder('ABBCcAD')         == ['A', 'B', 'C', 'c', 'A', 'D']
uniqueInOrder([1,2,2,3,3])       == [1,2,3]

// интересные решения
var uniqueInOrder=function(iterable){
    return [...iterable].filter((a, i) => a !== iterable[i-1])
}

// задание 8
deleteNth ([1,1,1,1],2) // return [1,1]
deleteNth ([20,37,20,21],1) // return [20,37,21]

// интересные решения
function deleteNth(arr,x) {
    var cache = {};
    return arr.filter(function(n) {
        cache[n] = (cache[n]||0) + 1;
        return cache[n] <= x;
    });
}

function deleteNth(arr,x){
    var obj = {}
    return arr.filter(function(number){
        obj[number] = obj[number] ? obj[number] + 1 : 1
        return obj[number] <= x
    })
}

// задание 9
function expandedForm(num) {
    return num.toString().split('').reverse().map((el,i)=>+el!==0 ? el*10**(i) : 0).reverse().filter(a=> a!==0).join(' + ')
}

// интересные решения


// 10
// We will consider a, e, i, o, u as vowels for this Kata (but not y).

// мое решение
function getCount(str) {
    const vowel = ['a', 'e', 'i', 'o', 'u']
    return str.split('').filter((el) => vowel.includes(el)).length
}


// интересные решения
function getCount(str) {
    return (str.match(/[aeiou]/ig)||[]).length;
}

function getCount(str) {
    return str.replace(/[^aeiou]/gi, '').length;
}

function getCount(str) {
    return str.split('').filter(c => "aeiouAEIOU".includes(c)).length;
}

// задание 10
// 4 --> 3 (1, 2, 4)
// 5 --> 2 (1, 5)
// 12 --> 6 (1, 2, 3, 4, 6, 12)
// 30 --> 8 (1, 2, 3, 5, 6, 10, 15, 30)

// мое решение
// нет

// интересные решения
function getDivisorsCnt(n) {
    var div = 0;
    for(var i = 1; i <= n; i++) if(n % i == 0) div++;
    return div;
}

// задание 11
// For example, if we run 9119 through the function, 811181 will come out, because 92 is 81 and 12 is 1.

// мое решение
function squareDigits(num){
    return +num.toString().split('').map(el=>el*el).join('');
}

// интересные решения
const squareDigits = (num) => Number((num + '').split("").map(c => c *c).join(""));


// задание 11
// (0, 1) --> 1 (0 + 1 = 1)
// (1, 1) --> 1 (1 since both are same)
// (-1, 0) --> -1 (-1 + 0 = -1)

// мое решение
function getSum( a,b )
{
    let arr = []
    let count = a
    if(a !== b){
        count = 0
        arr = (a>b) ? [...arr, b,a] : [...arr, a,b]
        for (i = arr[0]; i<=arr[1]; i++){
            count+=i
        }
    }
    return count
}

// интересные решения
function getSum( a, b ){
    return Array.from({length: b >= a ? b-a+1 : a-b+1}, (_, i)=> b >= a ? i+a : i+b).reduce((a, b)=> a + b, 0)
}

function GetSum(a, b) {
    return (a + b) * (Math.abs(a - b) + 1) / 2;
}