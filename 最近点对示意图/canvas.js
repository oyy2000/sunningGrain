  var canvas = document.getElementById('canvas'),
        context = canvas.getContext('2d'),
        //外边距
        AXIS_MARGIN = 80,
        //原点，将之设置到画布左下区域
        AXIS_ORIGIN = {x: canvas.width/2, y: canvas.height/2},
        //y轴顶点位置
        AXIS_TOP = AXIS_MARGIN,
		AXIS_BOTTOM = canvas.height -AXIS_MARGIN ,
        //x轴顶点位置
        AXIS_RIGHT = canvas.width - AXIS_MARGIN,
		AXIS_LEFT = AXIS_MARGIN,
        //横向刻度线间距
        HORIZONTAL_TICK_SPACING = 20,
        //垂直刻度线间距
        VERTICAL_TICK_SPACING = 20,
        //X轴长度
        AXIS_WIDTH = AXIS_RIGHT - AXIS_ORIGIN.x,
        //y轴长度
        AXIS_HEIGHT = AXIS_ORIGIN.y - AXIS_TOP,
        //y轴上的点的最大值
        NUM_VERTICAL_TICKS = AXIS_HEIGHT / VERTICAL_TICK_SPACING,
        NUM_HORIZONTAL_TICKS = AXIS_WIDTH / HORIZONTAL_TICK_SPACING,
        TICK_WIDTH = 10,
        TICKS_LINEWIDTH = 0.5,
        TICK_COLOR = 'navy',
        AXIS_LINEWIDTH = 1.0,
        AXIS_COLOR = 'blue';
    //Function……
    /**
     * 背景网格线
     * @param color
     * @param stepX
     * @param stepY
     */
    function drawGrid(color, stepX, stepY) {
        context.strokeStyle = color;
        context.lineWidth = 0.5;
        for (var i = stepX ; i < context.canvas.width; i += stepX) {
            context.beginPath();
            context.moveTo(i, 0);
            context.lineTo(i, context.canvas.height);
            context.stroke();
        }
        for (var i = stepY ; i < context.canvas.height; i += stepY) {
            context.beginPath();
            context.moveTo(0, i);
            context.lineTo(context.canvas.width, i);
            context.stroke();
        }
    }
    /**
     * 画坐标轴
     */
    function drawAxis() {
        context.save();
        context.strokeStyle = AXIS_COLOR;
        context.lineWidth = AXIS_LINEWIDTH;
        drawHorizontalAxis();
        drawVerticalAxis();
        context.lineWidth = TICKS_LINEWIDTH;
        context.strokeStyle = TICK_COLOR;
        drawVerticalAxisTicks();
        drawHorizontalAxisTicks();
        context.restore();
    }
    /**
     * 绘制x轴
     */
    function drawHorizontalAxis() {
        context.beginPath();
        context.moveTo(AXIS_ORIGIN.x, AXIS_ORIGIN.y);
        context.lineTo(AXIS_RIGHT, AXIS_ORIGIN.y);
		 context.moveTo(AXIS_ORIGIN.x, AXIS_ORIGIN.y);
		 context.lineTo(AXIS_LEFT, AXIS_ORIGIN.y);
        context.stroke();
    }
    /**
     * 绘制y轴
     */
    function drawVerticalAxis() {
        context.beginPath();
        context.moveTo(AXIS_ORIGIN.x, AXIS_ORIGIN.y);
        context.lineTo(AXIS_ORIGIN.x, AXIS_TOP);
		context.moveTo(AXIS_ORIGIN.x, AXIS_ORIGIN.y);
		context.lineTo(AXIS_ORIGIN.x, AXIS_BOTTOM);
        context.stroke();
    }
    /**
     * 绘制y轴刻度
     */
    function drawVerticalAxisTicks() {
        //小刻度长度的临时变量
        var deltaY;
        for (var i = 1; i < NUM_VERTICAL_TICKS; i++) {
            context.beginPath();
            //每5第五个刻度为长的小刻度
            if (i % 5 === 0) deltaY = TICK_WIDTH;
            else deltaY = TICK_WIDTH / 2;
            context.moveTo(AXIS_ORIGIN.x - deltaY, AXIS_ORIGIN.y - i * VERTICAL_TICK_SPACING);
            context.lineTo(AXIS_ORIGIN.x + deltaY, AXIS_ORIGIN.y - i * VERTICAL_TICK_SPACING);
            context.stroke();
        }
		for (var i = -1; i > -NUM_VERTICAL_TICKS; i--) {
		    context.beginPath();
		    //每5第五个刻度为长的小刻度
		    if (i % 5 === 0) deltaY = TICK_WIDTH;
		    else deltaY = TICK_WIDTH / 2;
		    context.moveTo(AXIS_ORIGIN.x - deltaY, AXIS_ORIGIN.y - i * VERTICAL_TICK_SPACING);
		    context.lineTo(AXIS_ORIGIN.x + deltaY, AXIS_ORIGIN.y - i * VERTICAL_TICK_SPACING);
		    context.stroke();
		}
    }
    /**
     * 绘制x轴刻度
     */
    function drawHorizontalAxisTicks() {
        //小刻度长度的临时变量
        var deltaY;
        for (var i = 1; i < NUM_HORIZONTAL_TICKS; i++) {
            context.beginPath();
            //每5第五个刻度为长的小刻度
            if (i % 5 === 0) deltaY = TICK_WIDTH;
            else deltaY = TICK_WIDTH / 2;
            context.moveTo(AXIS_ORIGIN.x+i*HORIZONTAL_TICK_SPACING, AXIS_ORIGIN.y-deltaY);
            context.lineTo(AXIS_ORIGIN.x+i*HORIZONTAL_TICK_SPACING, AXIS_ORIGIN.y+deltaY);
            context.stroke();
        }
		for (var i = -1; i > -NUM_HORIZONTAL_TICKS; i--) {
		    context.beginPath();
		    //每5第五个刻度为长的小刻度
		    if (i % 5 === 0) deltaY = TICK_WIDTH;
		    else deltaY = TICK_WIDTH / 2;
		    context.moveTo(AXIS_ORIGIN.x+i*HORIZONTAL_TICK_SPACING, AXIS_ORIGIN.y-deltaY);
		    context.lineTo(AXIS_ORIGIN.x+i*HORIZONTAL_TICK_SPACING, AXIS_ORIGIN.y+deltaY);
		    context.stroke();
		}
    }
    //Initialization……
    drawGrid('gray', 20, 20);
    drawAxis();