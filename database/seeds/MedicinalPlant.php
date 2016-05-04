<?php

use Illuminate\Database\Seeder;

class MedicinalPlant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicinal_plants')->truncate();

        $plant = new \VMN\Article\MedicinalPlant();
        $plant->commonName      = 'Ngải cứu';
        $plant->otherName       = 'Thuốc cứu, ngải diệp, nhả ngải, quá sú, cỏ linh li';
        $plant->scienceName     = 'Artemisia vulgaris';
        $plant->characteristic  = 'Là loại cỏ sống lâu năm, thân có rãnh dọc.Lá mọc so le không cuống, màu 2 mặt lá khác nhau, mặt trên nhẵn, màu lục sẫm.Mặt dưới trắng tro, có nhiều lông nhỏ';
        $plant->location        = 'châu Âu, châu Á, bắc Phi, Alaska và bắc Mỹ';
        $plant->utility         = 'Cầm máu, Giảm đau nhức, Sát trùng, kháng khuẩn, Điều hòa khí huyết';
        $plant->ratingPoint     = 3;
        $plant->ratingTime      = 1;
        $plant->thumbnailUrl    = 'ImgSample/ngai-cuu1.jpg';
        $plant->imgUrl          = json_encode(['ImgSample/ngai-cuu1.jpg','ImgSample/ngai-cuu-2.jpg','ImgSample/ngai-cuu-12.jpg']);
        $plant->author          = 'shinji';
        $plant->save();

        $plant1 = new \VMN\Article\MedicinalPlant();
        $plant1->commonName      = 'Tía tô';
        $plant1->otherName       = 'Tử tô, Tô ngạnh, Tô diệp';
        $plant1->scienceName     = 'Perilla frutescens';
        $plant1->characteristic  = 'Cây thảo, cao 0,5- 1m. Lá mọc đối, mép khía răng, mặt dưới tím tía, có khi hai mặt đều tía, nâu hay màu xanh lục có lông nhám. Hoa nhỏ màu trắng mọc thành xim co ở đầu cành, màu trắng hay tím, mọc đối, 4 tiểu nhị không thò ra ngoài hoa. Quả bế, hình cầu. Toàn cây có tinh dầu thơm và có lông. ';
        $plant1->location        = 'Ấn Độ sang Đông Á';
        $plant1->utility         = 'Tạo hưng phấn, trị cảm, nhức mỏi, ho suyễn';
        $plant1->ratingPoint     = 3;
        $plant1->ratingTime      = 2;
        $plant1->thumbnailUrl    = 'ImgSample/tiato2.jpg';
        $plant1->imgUrl          = json_encode(['ImgSample/tiato2.jpg','ImgSample/tiato1.jpg','ImgSample/Cay-tia-to.jpg']);
        $plant1->author          = 'shinji';
        $plant1->save();

        $plant2 = new \VMN\Article\MedicinalPlant();
        $plant2->commonName      = 'Nhọ Nồi';
        $plant2->otherName       = 'Cỏ mực, hàn liên thảo';
        $plant2->scienceName     = 'Eclipta prostrata';
        $plant2->characteristic  = 'Cây cỏ, sống một hay nhiều năm, mọc đứng hay mọc bò, cao 30–40 cm.' .
                                    'Thân màu lục hoặc đỏ tía, phình lên ở những mấu, có lông cứng.' .
                                    'Lá mọc đối, gần như không cuống, mép khía răng rất nhỏ; hai mặt lá có lông.' .
                                    'Hoa hình đầu, màu trắng, mọc ở kẽ lá hoặc ngọn thân, gồm hoa cái ở ngoài và hoa lưỡng tính ở giữa.' .
                                    'Quả bế dài 3mm, có 2-3 vảy nhỏ, có 3 cạnh, hơi dẹt.';
        $plant2->location        = 'châu Âu, châu Á, bắc Phi, Alaska và bắc Mỹ';
        $plant2->utility         = 'Chữa chảy máu bên trong và bên ngoài, rong kinh, băng huyết, chảy máu cam, trĩ, đại tiểu tiện ra máu, nôn và ho ra máu, chảy máu dưới da;
                                    ban sởi, ho, hen, viêm họng, bỏng, nấm da, tưa lưỡi.';
        $plant2->ratingPoint     = 6;
        $plant2->ratingTime      = 2;
        $plant2->thumbnailUrl    = 'ImgSample/nhonoi12.png';
        $plant2->imgUrl          = json_encode(['ImgSample/nhonoi12.png','ImgSample/nhonoi2.jpg','ImgSample/nhonoi3.jpg']);
        $plant2->author          = 'shinji';
        $plant2->save();

        $plant3 = new \VMN\Article\MedicinalPlant();
        $plant3->commonName      = 'Nghệ vàng';
        $plant3->otherName       = 'khương hoàng';
        $plant3->scienceName     = 'Curcuma longa';
        $plant3->characteristic  = 'Loại thực vật thân thảo lâu năm, mà có thể đạt đến chiều cao 1 mét.'
                                    .'Cây tạo nhánh cao, có màu vàng cam, hình trụ, và thân rễ có mùi thơm.'
                                    .'Các lá mọc xen kẽ và xếp thành hai hàng. Chúng được chia thành bẹ lá, cuống lá và phiến lá.'
                                    .'Từ các bẹ lá, thân giả được hình thành. Cuống lá dài từ 50 – 115 cm.'
                                    .'Các phiến lá đơn thường có chiều dài từ 76 – 115 cm và hiếm khi lên đến 230 cm.'
                                    .'Chúng có chiều rộng từ 38 – 45 cm và có dạng hình thuôn hoặc elip và thu hẹp ở chóp.';
        $plant3->location        = 'châu Âu, châu Á, bắc Phi, Alaska và bắc Mỹ';
        $plant3->utility         = 'Chữa các bệnh về dạ dày và gan, chữa bệnh về da: chàm, thủy đậu, bệnh zona, dị ứng, và ghẻ.';
        $plant3->ratingPoint     = 3;
        $plant3->ratingTime      = 1;
        $plant3->thumbnailUrl    = 'ImgSample/nghe.jpg';
        $plant3->imgUrl          = json_encode(['ImgSample/nghe.jpg','ImgSample/nghe1.jpg','ImgSample/nghe12.png']);
        $plant3->author          = 'shinji';
        $plant3->save();

        $plant4 = new \VMN\Article\MedicinalPlant();
        $plant4->commonName      = 'Đậu đen (Đỗ đen)';
        $plant4->otherName       = 'Ô đậu, hắc đại đậu, hương xị';
        $plant4->scienceName     = 'Vigna cylindrica';
        $plant4->characteristic  = 'Toàn thân không lông. Lá kép gồm 3 lá chét mọc so le, lá chét giữa to và dài hơn lá chét hai bên. Hoa màu tím nhạt. Quả giáp dài, tròn, trong chứa 7 đến 10 hạt màu đen';
        $plant4->location        = 'châu Âu, châu Á, bắc Phi, Alaska và bắc Mỹ';
        $plant4->utility         = 'Giải độc, bổ thận, bổ huyết, chữa được cước khí, bồi bổ cơ thể.';
        $plant4->ratingPoint     = 3;
        $plant4->ratingTime      = 1;
        $plant4->thumbnailUrl    = 'ImgSample/doden.jpg';
        $plant4->imgUrl          = json_encode(['ImgSample/doden.jpg','ImgSample/doden11.jpg','ImgSample/doden21.jpg']);
        $plant4->author          = 'shinji';
        $plant4->save();

        $plant5 = new \VMN\Article\MedicinalPlant();
        $plant5->commonName      = 'Đậu xanh (Đỗ xanh)';
        $plant5->otherName       = 'Lục đậu, đậu chè, má thúa kheo (Thái)';
        $plant5->scienceName     = 'Vigna radiata';
        $plant5->characteristic  = 'Cây thảo mọc đứng. Lá mọc kép 3 chia, có lông hai mặt. Hoa màu vàng lục mọc ở kẽ lá. Quả hình trụ thẳng, mảnh nhưng số lượng nhiều, có lông trong chúa hạt hình tròn hơi thuôn, kích thước nhỏ, màu xanh, ruột màu vàng, có mầm ở giữa.';
        $plant5->location        = '';
        $plant5->utility         = 'Giải độc, giải rượu,chữa lở loét, làm sáng mắt, nhuận họng, hạ huyết áp, mát buồng mật, bổ dạ dày';
        $plant5->ratingPoint     = 3;
        $plant5->ratingTime      = 3;
        $plant5->thumbnailUrl    = 'ImgSample/doxanh.jpg';
        $plant5->imgUrl          = json_encode(['ImgSample/doxanh.jpg','ImgSample/doxanh12.jpg','ImgSample/doxanh1234.jpg']);
        $plant5->author          = 'shinji';
        $plant5->save();

        $plant6 = new \VMN\Article\MedicinalPlant();
        $plant6->commonName      = 'Lược vàng';
        $plant6->otherName       = 'Lan vòi, lan rũ, cây bạch tuộc, giả khóm';
        $plant6->scienceName     = 'Callisia fragrans';
        $plant6->characteristic  = 'Thân ngắn, dựng lên, lan rộng, phân nhánh, hơi ưởng ẹo cong, từ nách lá mọc ra những nhánh thân ngang bên. Lá bền dai màu xanh tươi đến màu xanh đỏ nhạt';
        $plant6->location        = '';
        $plant6->utility         = 'Giảm đau, an thần, kháng viêm, hoạt huyết, ngăn ngừa sự phát triển của nhiều loại tế bào ung thư';
        $plant6->ratingPoint     = 3;
        $plant6->ratingTime      = 1;
        $plant6->thumbnailUrl    = 'ImgSample/luocvang.jpg';
        $plant6->imgUrl          = json_encode(['ImgSample/luocvang.jpg','ImgSample/luocvang1.jpg','ImgSample/luocvang121.jpg']);
        $plant6->author          = 'shinji';
        $plant6->save();

        $plant7 = new \VMN\Article\MedicinalPlant();
        $plant7->commonName      = 'Húng chanh';
        $plant7->otherName       = 'Rau tần, tần dày lá';
        $plant7->scienceName     = 'Plectranthus amboinicus';
        $plant7->characteristic  = 'Cây thân thảo, cao 20–50 cm. Phần thân sát gốc hoá gỗ. Lá mọc đối, dày cứng, giòn, mọng nước, mép khía răng tròn.'
                                    .'Thân và lá dòn, mập, lá dày có lông mịn, thơm và cay. Hai mặt lá màu xanh lục nhạt. Hoa nhỏ,4 tiểu nhị, màu tím đỏ, mọc thành bông ở đầu cành.'
                                    .'Quả nhỏ, tròn, màu nâu. Toàn cây có lông rất nhỏ và thơm như mùi chanh';
        $plant7->location        = '';
        $plant7->utility         = 'bổ phế trừ đàm, giải cảm, làm ra mồ hôi, thông khí, giải độc; trị các chứng: ho, viêm hầu họng, nghẹt mũi, cảm cúm, cổ họng khô rát, mất tiếng, nói khàn';
        $plant7->ratingPoint     = 4;
        $plant7->ratingTime      = 1;
        $plant7->thumbnailUrl    = 'ImgSample/hungchanh12321.jpg';
        $plant7->imgUrl          = json_encode(['ImgSample/hungchanh12321.jpg','ImgSample/hungchanh1212.jpg','ImgSample/hungchanh12.jpg']);
        $plant7->author          = 'shinji';
        $plant7->save();
//------------------------
        $plant8 = new \VMN\Article\MedicinalPlant();
        $plant8->commonName = 'Mướp';
        $plant8->otherName = 'Mướp hương, ty qua, thiên ty qua, bố ty, ty lạc';
        $plant8->scienceName = 'Luffa cylindrica (L.) Roem';
        $plant8->characteristic = 'là một loại dây leo, thân có goc cạnh, màu lục nhạt. Lá to, đường kính 15-25cm, phiến chia thùy hình 3 cạnh hay hình mác, mép có răng cưa, cuống dài 10-12cm, nháp, tua cuốn phân nhánh. Hoa màu vàng, hoa đực mọc thành chumg, hoa cái mọc đơn độc. Quả hình thoi hay hình trụ, lúc đầu mẫm sau khô, không mở, dài 0,25-1m, có khi hơn, mặt ngoài màu lục nhạt, trên có những đường màu đen chạy dọc theo quả. Hạt rất nhiều, hình trứng, màu nâu nhạt, dài 12mm, rộng 8-9mm, hơi có dìa. Khi quả đã chín, vỏ ngoài, hạt, cũng như chất nhầy đã tróc hết, còn lại khối xơ cứng dai, không bị nước làm mục hỏng, khi ngâm nước sẽ phồng lên và thành mềm, có thể dùng cọ, tắm rất tốt';
        $plant8->location = 'Được trồng khắp nơi trong nước ta';
        $plant8->utility = 'Lợi sữa cho phụ nữa mới đẻ và là cho huyết lưu thông. Xơ mướp là vị thuốc thanh lương, hoạt huyết, thông kinh, giải độc, giảm đau, cầm máu dùng trong những trường hợp chảy máu ruột, băng huyết, lỵ ra máu. Lá mướp vò nát dùng chữa bệnh zona';
        $plant8->ratingPoint = 3;
        $plant8->ratingTime = 1;
        $plant8->thumbnailUrl = 'ImgSample/muop1.png';
        $plant8->imgUrl =json_encode(['ImgSample/muop1.png','ImgSample/muop2.jpg','ImgSample/muop3.jpg']);
        $plant8->author = 'shinji';
        $plant8->save();

        $plant9 = new \VMN\Article\MedicinalPlant();
        $plant9->commonName = 'Huyết Giác';
        $plant9->otherName = 'cây xó nhà, cây dứa dại, cây giáng ông';
        $plant9->scienceName = 'Pleomele cochichinensis Mer';
        $plant9->characteristic = 'cây nhỏ cao chừng 1-1,5m có thể tới 2-3m, sống lâu năm. Thân phân thành nhiều nhánh. Cây nhỏ có đường kính chừng 1,9-2cm, cây to có đường kính 20-25cm. Lá hình lưỡi kiếm, trung bình dài 25-80cm, rộng 3-4cm tới 9-7cm, cứng, màu xanh  tươi, mọc cách, không có cuống. Lá trụng để lại trên thân một sẹo. Cụm hoa mọc thành chùm dài tới 1m, đường kính phía cuống tới 1,5-2cm trên có lá nhỏ dài 15cm rộng 2cm, phân cành nhỏ dài tới 30cm. Hoa tụ từng 2-4 hoa gần nhau. Hoa nhỏ, đường kính 7-8mm, màu lục vàng nhạt. Quả mọng hình cầu, đường kính chừng 1cm. Khi khô có màu đen, hạt hình câu, đường kính 9-7cm';
        $plant9->location = 'mọc hoang tại các vùng núi đá xanh vùng quảng ninh, nam định, hà nam, hà tây, hòa bình, nghệ an, hà tĩnh.';
        $plant9->utility = 'chữa những trường hợp ứ huyết, bị thương, máu tím bầm không lưu thông.';
        $plant9->ratingPoint = 2;
        $plant9->ratingTime = 1;
        $plant9->thumbnailUrl = 'ImgSample/huyetgiac1.jpg';
        $plant9->imgUrl =json_encode(['ImgSample/huyetgiac1.jpg','ImgSample/huyetgiac2.jpg','ImgSample/huyetgiac3.jpg']);
        $plant9->author = 'shinji';
        $plant9->save();

        $plant10 = new \VMN\Article\MedicinalPlant();
        $plant10->commonName = 'Cây ké đầu ngựa';
        $plant10->otherName = 'thương nhĩ, phắt ma';
        $plant10->scienceName = 'Xanthium strumarium L.';
        $plant10->characteristic = 'là một cây nhỏ, cao độ 2m thân có khía rãnh. Lá mọc so le, phiến lá hơi 3 cạnh, mép có răng cưa có chỗ khía hơi sâu thành 3-5 thùy, có lông ngắn cứng. Cụm hoa hình đầu có thứ lưỡng tính ở phía trên, có thử chỉ gồm có hai hoa cái nằm trong hai lá bắc dày và có gai. quả giả hình thoi, có móc, có thể móc vào lông động vật.';
        $plant10->location ='mọc hoang ở khắp nơi trong nước ta';
        $plant10->utility = 'tác dụng làm ra mồ hôi, tán phòn, dùng trong các chứng phong hàn, đau nhức, phong thấp, tê dại, mờ mắt, chân tay co dật, uống lâu ích khí';
        $plant10->ratingPoint = 4;
        $plant10->ratingTime = 1;
        $plant10->thumbnailUrl = 'ImgSample/kedaungua1.jpg';
        $plant10->imgUrl =json_encode(['ImgSample/kedaungua1.jpg','ImgSample/kedaungua2.jpg','ImgSample/kedaungua3.jpg']);
        $plant10->author = 'thoxuanduong';
        $plant10->save();

        $plant11 = new \VMN\Article\MedicinalPlant();
        $plant11->commonName = 'Thiên Lý';
        $plant11->otherName = 'Cây hoa lý, hoa thiên lý, dạ lài hương';
        $plant11->scienceName = 'Telosma cordata';
        $plant11->characteristic ='cây nhỏ, mọc leo, thân hơi có lông, nhất là ở những bộ phân còn non. Lá hình tim, thuôn, khía mép ở khoản 5-8mm về phía cuống, đầu lá nhọn, có lông trên các gân lá; phiến lá dài 11-11cm, rộng 4-7,5c, cuốn cũng có lông, dài 12-20mm. Hoa khá to, nhiều, màu vàng xanh lục nhạt, rất thơi, thành xim tán, có cuống to, hơi có lông dài 10-22m, mang nhiều tán mọc mau liền với nhau. Quả là những đại dài 11,5-9,5cm, rộng 12-14mm';
        $plant11->location ='cây thiên lý được trồng ở khắp nơi ở việt nam, nhiều nhất tại miền bắc ';
        $plant11->utility = 'Thường dùng hoa và lá thiên lý non để nấu chanh ăn cho mát và bổ, chữa lòi dom.';
        $plant11->ratingPoint = 4;
        $plant11->ratingTime = 1;
        $plant11->thumbnailUrl = 'ImgSample/thienly1.jpg';
        $plant11->imgUrl =json_encode(['ImgSample/thienly1.jpg','ImgSample/thienly2.jpg','ImgSample/thienly3.jpg']);
        $plant11->author = 'shinji';
        $plant11->save();

        $plant12 = new \VMN\Article\MedicinalPlant();
        $plant12->commonName = 'Cây rau ngót';
        $plant12->otherName = 'bồ ngót, bù ngót, hắc diện thần';
        $plant12->scienceName = 'Sauropus androgynus (L) Merr';
        $plant12->characteristic ='cây nhỏ, nhẵn, có thể cao tới 1,5-2m. Có nhiều cành mọc thẳng. Vì người ta hái lá luôn nên thường chỉ thấp 0,9-1m. Vỏ cây màu xanh lục, sau này màu nâu nhạt. Lá mọc so le dài 4-12cm, rộng 15-30mm cuống rất ngắn 1-2mm có 2 lá kèm nhỏ, phiến lá nguyên hình trứng dài hoặc bầu dục, mép nguyên. Hoa đực mọc ở kẽ lá thành xim đơn ở phía dưới,hoa cái ở trên. Quả nang hình cầu, hạt có vân nhỏ';
        $plant12->location = 'Mọc hoang và được trồng khắc nơi ở Việt Nam để lấy lá nấu canh.';
        $plant12->utility = 'chữa sót nhau, tưa lưỡi.';
        $plant12->ratingPoint = 3;
        $plant12->ratingTime = 1;
        $plant12->thumbnailUrl = 'ImgSample/raungot1.jpg';
        $plant12->imgUrl =json_encode(['ImgSample/raungot1.jpg','ImgSample/raungot2.jpg','ImgSample/raungot3.jpg']);
        $plant12->author = 'shinji';
        $plant12->save();

        $plant13 = new \VMN\Article\MedicinalPlant();
        $plant13->commonName = 'Cây Diếp Cá'; 
        $plant13->otherName = 'cây lá giấp, ngư tinh thảo'; 
        $plant13->scienceName = 'Houttuynia cordata Thunb.'; 
        $plant13->characteristic =' là một loại cỏ nhỏ, mọc lâu năm, ưa chỗ ẩm ướt có than rễ mọc ngầm dưới đất. Rễ nhỏ mọc ở các đốt, thân mọc đứng cao 40cm, có lông hoặc ít lông. Lá mọc ách, hình tim, đầu lá hơi nhọn hay nhọn hẳn. Hoa nhỏ màu vàng nhạt, không có bao hoam mọc thành bông, có 4 lá bắc mùa trắng; trông toàn bộ bề ngoài của cụm hoa và lá bắc giống như một cây hoa đơn độc, toàn cây vò có mùi tanh như các. hoa nở về mùa hạ vào các tháng 5-8';
        $plant13->location ='Mọc hoang ở khắp nơi ẩm thấp trong nước ta.'; 
        $plant13->utility = 'dùng trong những trường hợp tụ máu như đau ắt hoặc trong bệnh trĩ lòi dom. Ngoài ra còn có tác dụng thông tiểu, chữa bệnh mụn nhọt, kinh nguyệt không đều.';
        $plant13->ratingPoint = 4; 
        $plant13->ratingTime = 1; 
        $plant13->thumbnailUrl = 'ImgSample/diepca1.jpg';
        $plant13->imgUrl =json_encode(['ImgSample/diepca1.jpg','ImgSample/diepca2.jpg','ImgSample/diepca3.jpg']); 
        $plant13->author = 'thoxuanduong';
        $plant13->save();

        $plant14 = new \VMN\Article\MedicinalPlant();
        $plant14->commonName = 'Mã đề';
        $plant14->otherName = 'Xa tiền';
        $plant14->scienceName = 'Plantago asiatia L.';
        $plant14->characteristic ='loại cỏ sống lâu năm, thân nhẵn. Lá mọc thành cụm ở gốc, phiến lá hình thìa hay hình trứng, có gân dọc theo sống lá và đồng quy ở ngọn và gốc lá. Hoa mọc thành bông, có cán dài, xuất phát từ kẽ lá. Hoa lưỡng tính. Quả hộp, trong chứa nhiều hạt màu nâu đen bóng.';
        $plant14->location ='Cây mọc hoang và được trồng ở nhiều nơi trên khắp nước ta.';
        $plant14->utility = 'long đờm và trị ho, trị mụn nhọt và bỏng, lợi tiểu';
        $plant14->ratingPoint = 4;
        $plant14->ratingTime = 1;
        $plant14->thumbnailUrl = 'ImgSample/made1.jpg';
        $plant14->imgUrl =json_encode(['ImgSample/made1.jpg','ImgSample/made2.jpg','ImgSample/made.jpg']);
        $plant14->author = 'thoxuanduong';
        $plant14->save();

    }
}
