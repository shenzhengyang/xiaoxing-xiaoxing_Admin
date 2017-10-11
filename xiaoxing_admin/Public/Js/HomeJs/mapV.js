/**
 *添加地图覆盖物Marker
 * @param point BMap.Point
 * @param path icon 路径
 * @param infowindow 消息窗口
 */
function addMarker(point,path,content) {
    //创建自定义icon
    var myIcon = new BMap.Icon(path,new BMap.Size(48, 48), {offset: new BMap.Size(10, 25)});
    var marker = new BMap.Marker(point, {icon: myIcon});
    map.addOverlay(marker);
    marker.addEventListener("click", function(){
        createInfoWindow('提示',content,point)
    });
    marker.setAnimation(BMAP_ANIMATION_BOUNCE);
    return marker;
}

/**
 * 消息面板
 * @param titleContent 标题
 * @param content 内容
 */
function createInfoWindow(titleContent, content,point) {
    var opts = {
        width: 100,     // 信息窗口宽度
        height: 40,     // 信息窗口高度
        title: titleContent  // 信息窗口标题
    }
    var infoWindow = new BMap.InfoWindow(content, opts);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow, point);      // 打开信息窗口
}

// 百度地图API功能
var map = new BMap.Map("map", {
    enableMapClick: false
});    // 创建Map实例
map.centerAndZoom(new BMap.Point(105.403119, 38.028658), 5);  // 初始化地图,设置中心点坐标和地图级别
/*map.enableScrollWheelZoom(false); // 开启鼠标滚轮缩放*/
var NavigationOpts = {offset: new BMap.Size(20, 100)}
map.addControl(new BMap.NavigationControl(NavigationOpts));
map.addControl(new BMap.ScaleControl());
map.addControl(new BMap.OverviewMapControl());
map.addControl(new BMap.MapTypeControl());
map.setMapStyle({
    style: 'light'
});

$.post('../EquipStatus/echart_mapV',null,function(mdata){
    data=mdata.data;
    map.centerAndZoom(new BMap.Point(mdata.lng, mdata.lat), 15);

    //添加marker
    for(var data_item in data){
        var geometry=data[data_item].geometry;
        var coordinates=geometry['coordinates'];
        var lng=coordinates[0];
        var lat=coordinates[1];
        var point = new BMap.Point(lng, lat);
        addMarker(point,'../../Public/Image/location48.svg','');
    }
    var dataSet = new mapv.DataSet(data);

    var options = {
        fillStyle: 'rgba(255, 50, 50, 0.6)',
        shadowColor: 'rgba(255, 50, 50, 1)',
        shadowBlur: 30,
        globalCompositeOperation: 'lighter',
        methods: {
            click: function (item) {
                console.log(item);
            }
        },
        size: 1,
        draw: 'simple'
    }

    var mapvLayer = new mapv.baiduMapLayer(map, dataSet, options);
    mapvLayer.show(); // 显示图层
});

/*var randomCount = 3;*/

/*
 var data = [{"geometry":{"type":"Point","coordinates":[38.588777235396,117.0576520021013]},"count":30},{"geometry":{"type":"Point","coordinates":[38.583961693243,"117.05512776361829"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.586736755739,"117.05337606787383"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.590037087181,"117.05316945760656"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.587244626863,"117.05261250819035"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.580630262325,"117.05340301703913"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.580296606762,"117.05144471102739"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.584332128028,"117.0497558966686"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.584333629068,"117.04975297981825"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.584333629068,"117.04975297981825"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.584333629068,"117.04975297982"]},"count":30},{"geometry":{"type":"Point","coordinates":[38.584333629068,"117.04975297982"]},"count":30}];

 var citys = ["北京","天津","上海","重庆","石家庄","太原","呼和浩特","哈尔滨","长春","沈阳","济南","南京","合肥","杭州","南昌","福州","郑州","武汉","长沙","广州","南宁","西安","银川","兰州","西宁","乌鲁木齐","成都","贵阳","昆明","拉萨","海口"];
 */

// 构造数据
/*while (randomCount--) {
    var cityCenter = mapv.utilCityCenter.getCenterByCityName(citys[parseInt(Math.random() * citys.length)]);
    data.push({
        geometry: {
            type: 'Point',
            coordinates: [117.0576520021013,38.588777235396]
        },
        count: 30 * Math.random()
    });
}

var dataSet = new mapv.DataSet(data);

var options = {
    fillStyle: 'rgba(255, 50, 50, 0.6)',
    shadowColor: 'rgba(255, 50, 50, 1)',
    shadowBlur: 30,
    globalCompositeOperation: 'lighter',
    methods: {
        click: function (item) {
            console.log(item);
        }
    },
    size: 5,
    draw: 'simple'
}

var mapvLayer = new mapv.baiduMapLayer(map, dataSet, options);*/

// dataSet.set(data); // 修改数据

// mapvLayer.show(); // 显示图层
// mapvLayer.hide(); // 删除图层
