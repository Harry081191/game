// 获取canvas元素
var canvas = document.getElementById('chart');
// 获取canvas上下文对象
var ctx = canvas.getContext('2d');
// 定义每个语言的占比比例
var python = 0.95;
var csharp = 0.80;
var java = 0.85;
// 定义每个语言对应的颜色
var pythonColor = 'blue';
var csharpColor = 'green';
var javaColor = 'red';
// 定义圆心坐标和半径
var centerX = canvas.width / 2;
var centerY = canvas.height / 2;
var radius = canvas.width / 4;
// 定义每个语言在饼图中对应的角度
var pythonAngle = python * 2 * Math.PI;
var csharpAngle = csharp * 2 * Math.PI;
var javaAngle = java * 2 * Math.PI;
// 绘制饼图
ctx.beginPath();
ctx.moveTo(centerX, centerY);
ctx.arc(centerX, centerY, radius, 0, pythonAngle);
ctx.fillStyle = pythonColor;
ctx.fill();
ctx.moveTo(centerX, centerY);
ctx.arc(centerX, centerY, radius, pythonAngle, pythonAngle + csharpAngle);
ctx.fillStyle = csharpColor;
ctx.fill();
ctx.moveTo(centerX, centerY);
ctx.arc(centerX, centerY, radius, pythonAngle + csharpAngle, pythonAngle + csharpAngle + javaAngle);
ctx.fillStyle = javaColor;
ctx.fill();
ctx.closePath();