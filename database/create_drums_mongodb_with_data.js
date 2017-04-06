use drums

db.createCollection("admin");
db.createCollection("comments");
db.createCollection("order_details");
db.createCollection("users");

db.createCollection("cymbals");
db.cymbals.insert([{
	name:"Zultan Aja Fusion - Funk Bundle",
	description:"Zultan Aja Fusion - Funk Cymbal Bundle containing ZULTAN 20\" AJA RIDE (order code 277727), ZULTAN 13\" AJA HI-HAT (order code 273923), ZULTAN 16\" AJA CRASH (order code 273920), ZULTAN 12\" AJA SPLASH (order code 277711) Drums \/ Crash Cymbals ",
	price:245,
	producer:"Zultan",
	stock:null,
	sales:0
},
{
	name:"Zildjian ZBT Promo Pack Pro Medium",
	description:"Zildjian ZBT 4 Series Holiday Set - 14\" hi-hat, 16\" crash, 20\" ride and 18\" crash. sensational sounding set thomann of cymbals. Revolutionary new manufacturing techniques developed by the Zildjian Sound Lab release a fast, bright, high-volume sound from the power-packed ZBT alloy. They make an ideal first set of Zildjians for any school marching and concert band.",
	price:239,
	producer:"Zildjian",
	stock:null,
	sales:0
},
{
	name:"Sabian XS20 Performance Set",
	description:"Sabian XS20 Performance Plus Cymbal Set - 20\" medium ride, 16\" medium thin crash, 14\" medium Hi-Hat and 18\" thomann medium thin crash.",
	price:377,
	producer:"Sabian",
	stock:null,
	sales:0
},
{
	name:"Paiste PST3 Starter Pack Set 2",
	description:"Paiste PST3 Series, Starter Pack Set 2, Set containing: 13\" Hi-Hat and 18\" Crash / Ride",
	price:121,
	producer:"Paiste",
	stock:null,
	sales:0
},
{
	name:"Stagg CXG Limited Edition Start Set",
	description:"Stagg CXG Limited Edition Brass Cymbal Starter Set – 13\" medium Hi-Hat, 18\" crash/ride and 16\" crash cymbals.",
	price:95,
	producer:"Stagg",
	stock:null,
	sales:0
},
{
	name:"Meinl GX-TB1416/18 Thomas Lang Set",
	description:"Meinl GX-TB 14/16/18, Thomas Lang Cymbal Set, Set containing Generation X 16\" Synthetik Crash, 18\" Signal Crash/Klub Ride, thomann 14\" Filter China",
	price:251,
	producer:"Meinl",
	stock:null,
	sales:0
},
{
	name:"Meinl HCS Cymbal Set Standar B-Stock",
	description:"B-Stock, Meinl HCS Series standard cymbal set - 14\" Hi-Hat, 16\" crash and 20\" ride., B-Stock with full warranty, thomann may have traces of use",
	price:159,
	producer:"Meinl",
	stock:null,
	sales:0
},
{
	name:"Zildjian ZXT Effect Box Set",
	description:"Zildjian Beckenset from the ZXT Series included: 10\" Flash Splash + 18\" Total China, hammered, clear und warm sounded thomann Cymbal.",
	price:189,
	producer:"Zildjian",
	stock:null,
	sales:0
},
{
	name:"Zultan Aja Fusion - Funk Bundle",
	description:"Zultan Aja Fusion - Funk Cymbal Bundle containing ZULTAN 20\" AJA RIDE (order code 277727), ZULTAN 13\" AJA HI-HAT (order code 273923), ZULTAN 16\" AJA CRASH (order code 273920), ZULTAN 12\" AJA SPLASH (order code 277711) Drums \/ Crash Cymbals ",
	price:245,
	producer:"Zultan",
	stock:null,
	sales:0
},
{
	name:"Masterwork Troy Cymbal Set",
	description:"Masterwork Troy Cymbalset, Set containing 14\" Hi-Hat - 16\" Crash - 20\" Ride included Bag, Brilliant Surface Finish, thomann the Troy Series are the perfect start into the Masterworold Cymbal World, handhammered, B20 Alloy with a sensationell low Price by highest Sound Quality,",
	price:245,
	producer:"Masterwork",
	stock:null,
	sales:0
},
{
	name:"Zultan Rock Beat Profi Cymbal B-Stock",
	description:"B-Stock, Zultan Rock Beat Series, complete Profi Cymbalset containing 14\" Hi-Hat - 16\" and 18\" Crash - 20\" Ride thomann Cymbal included Cymbalbag, quality highclass Cymbalset for all Musikstyles,, B-Stock with full warranty, may have slight traces of use",
	price:349,
	producer:"Zultan",
	stock:null,
	sales:0
},
{
	name:"Zultan Aja Fusion - Funk Bundle",
	description:"Zultan Aja Fusion - Funk Cymbal Bundle containing ZULTAN 20\" AJA RIDE (order code 277727), ZULTAN 13\" AJA HI-HAT (order code 273923), ZULTAN 16\" AJA CRASH (order code 273920), ZULTAN 12\" AJA SPLASH (order code 277711) Drums \/ Crash Cymbals ",
	price:245,
	producer:"Zultan",
	stock:null,
	sales:0
},
{
	name:"Istanbul Agop Xist Brilliant Cymbal Set",
	description:"Istanbul Agop Cymbal Set, Xist Series, Brilliant Finish, professional quality in B20 (80% Copper, 20\" Tin), Set containing thomann 14\" Hi-Hat - 16\" Crash - 20\" Ride included Cymbalbag",
	price:473,
	producer:"Istanbul",
	stock:null,
	sales:0
},
{
	name:"Sabian AAX Metal Cymbal Set B-Stock",
	description:"B-Stock, Sabian AAX Metal Cymbal Set, Set containing 14\" AAX Stage Hi-Hat, 16\" AAX Metal Crash, 18\" AAX Metal thomann Crash, 20\" AAX Metal Ride, this wonderful Sound Matched Cymbalset will be used specially in Rock Music Styles, specially the solid response, fast and bright, maximum penetrating power in even the loudest music are the tip for this Set, B-Stock with full warranty, thomann may have slight traces of use",
	price:555,
	producer:"Sabian",
	stock:null,
	sales:0
},
{
	name:"Sabian XS20 Super Plus Cymbal Set",
	description:"Sabian XS20 Super Plus Cymbal Set, Set containing 20\" Medium Ride, 14\" - 16\" - 18\" Medium Crash, 14\" thomann Medium Hi-Hat and 10\" Splash complete Cymbalset,",
	price:575,
	producer:"Sabian",
	stock:null,
	sales:0
},
{
	name:"Anatolian Ultimate Regular Cymbal Bundle",
	description:"Anatolian Ultimate Regular Cymbal Bundle containing ANATOLIAN 14\" REGULAR HI-HAT ULTIMATE ",
	price:628,
	producer:"Anatolian",
	stock:null,
	sales:0
},
{
	name:"Zultan Aja Fusion - Funk Bundle",
	description:"Zultan Aja Fusion - Funk Cymbal Bundle containing ZULTAN 20\" AJA RIDE (order code 277727), ZULTAN 13\" AJA HI-HAT (order code 273923), ZULTAN 16\" AJA CRASH (order code 273920), ZULTAN 12\" AJA SPLASH (order code 277711) Drums \/ Crash Cymbals ",
	price:245,
	producer:"Zultan",
	stock:null,
	sales:16
},
{
	name:"Zildjian ZXT Promo Pack Pro Med B-Stock",
	description:"B-Stock, Zildjian ZXT Pro Pack Holiday Set - 14\" solid hi-hat, 16\" medium thin crash, 18\" medium thin crash, thomann 20\" medium ride. Hammered, clear and warm sound., B-Stock with full warranty, may have slight traces of use",
	price:332,
	producer:"Zildjian",
	stock:null,
	sales:0
},
{
	name:"Zildjian K-Series Profi Promo Pack",
	description:"Zildjian K-Serie Profi Promo Pack, Cymbalset containing 14\" K-Series Hi-Hat, 16\" K-Series Dark Thin Crash, 18\" K-Series Dark thomann Thin Crash, 20\" K-Series Ride, the Zildjian cymbal set from the apparently most sold Zildjian cymbal series worldwide,",
	price:835,
	producer:"Zildjian",
	stock:null,
	sales:0
},
{
	name:"Paiste Black Alpha Hyper Set",
	description:"Paiste Black Alpha Hyper Set, Set containing 14\" Hi-Hat - 16\" Crash - 20\" Ride and 10\" Splash, CuSn8 thomann Bronze also known as 2002 Bronze, special Joey Jordison edition, Black Alphas contain Paiste's innovative black Colorsound coating and each cymbal features 9 silver placed Tribal-S logos,",
	price:535,
	producer:"Paiste",
	stock:null,
	sales:0
},
{
	name:"Sabian Paragon Neil Peart Set",
	description:"Sabian Paragon Neil Peart complete Set, containing per 1x: 08\" - 10\" Splash, 16\" - 18\" - 20\" Crash, thomann 19\" - 20\" China, 13\" - 14\" Hi-Hat, 22\" Ride Cymbal, Deluxe Flight Case, special extra 16\" Crash,",
	price:2839,
	producer:"Sabian",
	stock:null,
	sales:0
},
{
	name:"Paiste Set 1 101 13\"HH/ 18\"CR",
	description:"Paiste 101 Series, Brass Material, Set 1, Set containing 13\" Hi-Hat and 18\" Crash/Ride",
	price:115,
	producer:"Paiste",
	stock:null,
	sales:21
},
{
	name:"Paiste PST3 Cymbal Set Economy Bag",
	description:"Paiste PST3 cymbal set containing 14\" Hi-Hat, 16\" crash & 20\" ride cymbal. Includes Thomann economy cymbal bag. PAISTE PST3 20\" RIDE , PAISTE PST3 14\" HI-HAT , PAISTE PST3 16\" CRASH ",
	price:535,
	producer:"Paiste",
	stock:null,
	sales:0
}]);

db.createCollection("drums");
db.drums.insert([
{
	name:"Mapex 14x5,5\" Special Panther Maple",
	description:"Mapex 14\"x5,5\" Special Thomann Edition Black Panther Snare Drum, Finish: Transparent Walnut (WT), 100% Maplewood Shell, Chrome Hardware, thomann 2,3mm Power Hoops",
	price:125,
	producer:"Mapex",
	stock:null,
	sales:0
},
{
	name:"Pearl MMP 14\"x5,5\" Snare Drum #165/B",
	description:"Pearl MMP 14\"x5,5\" Snare Drum, Masters Premium Maple Series, MMP1455S/B #165, Colour: Diamond Burst.Black Shell Hardware, snare drum with 4-ply (5mm thick) maple shell and 5mm reinforcement rings",
	price:439,
	producer:"Pearl",
	stock:null,
	sales:0
},
{
	name:"Yamaha 14x06 Rock Tour Snare Drum TSS",
	description:"Yamaha Rock Tour Series 14\"x06\" Snare Drum, Color: Texture Smoke Sunburst (TSS), Rock Tour Texture Ash Finish, Variation thomann 6-Innerply Big Reaf Mahogany and 2-Outerply Ash Textured Shells with a rich and warm mid-low range tone.",
	price:219,
	producer:"Yamaha",
	stock:null,
	sales:0
},
{
	name:"Millenium 22\"x14\" MX200 Series Bass Drum",
	description:"Millenium 22\" x 14\" bass drum - covered shell with single-ply drum head from the Millenium MX200 series. thomann Colour: Black.",
	price:66,
	producer:"Millenium",
	stock:null,
	sales:0
},
{
	name:"Tama 22\"x18\" Imperialstar BD -BK",
	description:"Tama 22\"x18\" Bass Drum, Imperialstar Series, Colour Black (BK), 7,5mm thickness, 100% Poplarwood Shells, covered Shells, IMB22E-BK",
	price:289,
	producer:"Tama",
	stock:null,
	sales:0
},
{
	name:"Sonor ProLite 16\"x16\" FT Red Tribal",
	description:"Sonor ProLite 16\"x16\" Floor Tom, Color Red Tribal (-74), Version Exotic Veneer High Gloss lacquered Shell, chrome Shell thomann Hardware, 2,3 mm Power Hoops, Shell Construction: Vintage (Extra Thin), Shell Thickness: 9 layers = 4 mm + 2 mm Dynamic Edge, Tension Rods: 2 x 8 pieces, all Shells with a 45° bearing Edge in handselected extremly Thin 100% Maple Wood with Reinforcement thomann Rings for a open Sound with warm Tone and excellent balance between Mids and Hi Range, 3 Floortomlegs, all Lugs with Tunesafe, PL 12 1616 FT,",
	price:679,
	producer:"Sonor",
	stock:null,
	sales:0
},
{
	name:"Millenium 16\"x16\" MX500 Series Floor Tom",
	description:"Millenium MX500 Series 16 x 16\" floor tom - lacquered shell, single-ply drum head. Colour: Black",
	price:45,
	producer:"Millenium",
	stock:null,
	sales:0
},
{
	name:"Gretsch 10\"x07\" TT Renown Maple -SB",
	description:"Gretsch Renown Maple 10\"x07\" Tom Tom, RN-0710T-SB, matte lacquered Shell, Size: 10\"x07\", Color: Satin Black (SB), 6-ply with thomann 30° 100% All Maple Wood Shell, Gretsch Silver Sealer inside all drums, Die Cast Hoops, Evans Heads, GTS free Suspension Tom Mount System,",
	price:199,
	producer:"Gretsch",
	stock:null,
	sales:0
},
{
	name:"Sonor ProLite 10\"x08\" TT Creme White",
	description:"Sonor ProLite 10\"x08\" Tom Tom, Color Creme White (-70), Version Matte/Satin Semi Gloss lacquered Shells, chrome Shell Hardware, thomann 2,3 mm Power Hoops, Shell Construction: Vintage (Extra Thin), Shell Thickness: 9 layers = 4 mm + 2 mm Dynamic Edge, Tension Rods: 2 x 6 pieces, all Shells with a 45° bearing Edge in handselected extremly Thin 100% Maple Wood with Reinforcement Rings thomann for a open Sound with warm Tone and excellent balance between Mids and Hi Range, Tom Toms with T.A.R Mount System, all Lugs with Tunesafe, PL 12 1008 TT,",
	price:344,
	producer:"Sonor",
	stock:null,
	sales:0
},
{
	name:"Sabian 14\" AAX X-Celerator Hi-Hat",
	description:"Sabian AAX 14\" X-Celerator Hi-Hat - bright, ’Auto-Focus Response’ ensures crisp, accurate sounds, while ’airwave’ bottom eliminates air thomann lock for maximum clarity. Brilliant finish.",
	price:311,
	producer:"Sabian",
	stock:null,
	sales:0
},
{
	name:"Zildjian 14\" ZXT Rock Hi-Hat",
	description:"Zildjian ZXT Series, 14\" Rock Hi-Hat - hammered, clean and warm sounding cymbals.",
	price:168,
	producer:"Zildjian",
	stock:null,
	sales:0
},
{
	name:"Zildjian 16\" A-Custom Crash",
	description:"Zildjian 16\" A-Custom Crash - brilliant finish, natural and bright, beautiful warm undertones.",
	price:205,
	producer:"Zildjian",
	stock:null,
	sales:0
},
{
	name:"Paiste 18\" Line Full Crash",
	description:"Paiste Signature Line 18\" Full Crash Cymbal - bright, full, warm, brilliant sparkling. Wide range, balanced, clean mix. thomann Even response with warm, shimmering sustain. A very versatile, general purpose crash cymbal.",
	price:355,
	producer:"Paiste",
	stock:null,
	sales:0
},
{
	name:"Zildjian 20\" A-Custom Projection Ride",
	description:"Zildjian A-Custom 20\" Projection Ride - loud, clear bell and clean articulate ping with just the right amount of thomann shimmering undertones. Brilliant finish.",
	price:268,
	producer:"Zildjian",
	stock:null,
	sales:0
},
{
	name:"Sabian 22\" HH Rock Ride",
	description:"Sabian 22\" HH Hand Hammered Rock Ride - brilliant finish, powerful high end cut and warm tone combined with thomann bright bell for a loud, penetrating ride with character.",
	price:277,
	producer:"Sabian",
	stock:null,
	sales:0
},
{
	name:"Sonor SP 473 Bass Drum Pedal",
	description:"Sonor SP473 400 Series Bass Drum Pedal - aluminium design with support board.",
	price:58,
	producer:"Sonor",
	stock:null,
	sales:0
},
{
	name:"Tama HP900PSWN PowerGlide IronCobra",
	description:"Tama HP900PSWN, Power Glide System, Double Bass Drum Pedal, The Power Glide features a double-chained offset cam which thomann increases power and speed as the beater reaches the end of the stroke, new bearing Housing, Cobra Coil, Speedo-Ring, Oiles® bearing Hinge, Vari-Pitch Beater Holder, Felt Iron Cobra Beater, included Carrying Cases",
	price:369,
	producer:"Tama",
	stock:null,
	sales:0
},
{
	name:"Tama 13\"x10\" Imperialstar Tom -HBK",
	description:"Tama 13\"x10\" Tom Tom, Imperialstar Series, Colour: Hairline Black (HBK), 7,5mm thickness, 100% Poplarwood Shells, covered Shells, IMT13A-HBK,",
	price:104,
	producer:"Tama",
	stock:null,
	sales:0
},
{
	name:"Sonor 13\"x10\" TT Essential Green Fad",
	description:"Sonor Essential Force Series, 13\"x10\" Tom Tom, Color: Green Fade, highgloss lacquered Shell, Chrome Hardware, the 6-ply 100% thomann Birchwoodshells with 7,2mm thickness comes with a hefty and dynamic sound and with accentuated mid-ranges and highs, and defined lows, the hallmark of these shells, high-gloss-lacquered surfaces, Tuning Lugs with TuneSafe, vibration-free T.A.R. system (Total Acoustic ­Resonance) with APS provides maximum ­resonance and thomann sustain,",
	price:123,
	producer:"Sonor",
	stock:null,
	sales:0
},
{
	name:"Pearl BC-900 Cymbal Boom Stand",
	description:"Pearl BC-900 Cymbal Boom Stand - 900 Series, quickly changes from a boom stand to a straight cymbal stand, thomann Uni-Lock tilter, reversible wingnut, SureStrut double-braced legs, UltraGrip wingnuts/bolts.",
	price:71,
	producer:"Pearl",
	stock:null,
	sales:0
},
{
	name:"Millenium CS-901 Pro Cymbal Stand",
	description:"Millenium CS-901 Pro Series, straight double-braced cymbal stand, 2 adjustable memory clamps. Strong, heavy & professional construction.",
	price:36,
	producer:"Millenium",
	stock:null,
	sales:0
},
{
	name:"Yamaha CS-650A Straight Cymbal Stand",
	description:"Yamaha CS-650 - straight cymbal stand with 3x single braced legs, adjustable height (62-145cm).",
	price:49,
	producer:"Yamaha",
	stock:null,
	sales:0
},
{
	name:"Vic Firth VFX5A Extreme 5A -Wood-",
	description:"Vic Firth VFX5A Extreme 5A - wood tip, similar to a regular 5A stick but with more power and thomann reach. Length: 16.5\". Diameter: 0.57\".",
	price:9.5,
	producer:"Vic Firth",
	stock:null,
	sales:0
},
{
	name:"Pro Mark TX5ABW Hickory -Wood",
	description:"Pro Mark TX5ABW, Hickory Wood, oval Wood Tip, Length: 16\", Diameter: 0.551\"",
	price:10.7,
	producer:"Pro Mark",
	stock:null,
	sales:0
},
{
	name:"Tama HS700WN Snare Stand",
	description:"Tama HS700WN snarestand from the roadpro series, incl. omni-ball tilter, for 12\"-14\" snare drums, double braced leg, height: thomann 625-785mm",
	price:79,
	producer:"Tama",
	stock:null,
	sales:0
},
{
	name:"Millenium DHS-1018 Stage Hi-Hat",
	description:"Millenium DHS-1018 stage series Hi-Hat stand - 3x double braced legs, height adjustable from 69 cm to 96 cm",
	price:29,
	producer:"Millenium",
	stock:null,
	sales:0
},
{
	name:"Pearl H-1000K Hi-Hat Stand Roller",
	description:"Pearl H-1000K, Hi-Hat Stand, Super Pro Series, double Braced Hardware, swivelling Hi-Hat Pedal, spring tension adjustable, Ultra Grip thomann Screws, Eliminator Foot Plate, Roller Pulley Chain Drive System, for more comfortable feeling,",
	price:158,
	producer:"Pearl",
	stock:null,
	sales:0
}
]);

db.createCollection("hardware");
db.hardware.insert([{
	name:"Yamaha HW880 Hardware Set",
	description:"Yamaha HW800 Hardwarepack, Hardware from the 800er Hardware Series, Pack containing: 1x HS850 Hi-Hat Stand, 1x SS850 Snare thomann Stand, 1x FP8500C Single Bass Drum pedal, 2x CS865 Cymbalboomstand without Weight",
	price:679,
	producer:"Yamaha",
	stock:null,
	sales:0
},
{
	name:"Millenium HW-800 Pro Hardware Bundle",
	description:"Millenium Pro Series HW-800 Hardware Pack - HH-901 Hi-Hat stand, CS-801 straight cymbal stand, CB-801 cymbal boom stand, thomann SS-801 snare stand, PD-111 single drum pedal.",
	price:171,
	producer:"Millenium",
	stock:null,
	sales:0
},
{
	name:"Sonor HS174 Hardware Set",
	description:"Sonor HS174 Hardware Set - comprises 1x MBS173 cymbal boom stand, 1x CS171 straight cymbal stand, 1x HH174 Hi-Hat thomann stand, 1x SS177 snare drum stand, 1x SP273 bass drum pedal, single-braced hardware, heavy version.",
	price:199,
	producer:"Sonor",
	stock:null,
	sales:0
},
{
	name:"DW Hardware Pack 3000er Series",
	description:"Drum Workshop Hardware Pack, 3000er Series containing DW2000 Single Bass Drum Pedal, DW3500 Hi-Hat Stand, DW3300 Snare Stand, thomann DW3710 straight Cymbalstand, DW3700 Cymbalboomstand",
	price:344,
	producer:"DW",
	stock:null,
	sales:0
},
{
	name:"Tama HP5W Hardware Set",
	description:"Tama HP5W Hardwareset containing HP 900PS Iron Cobra Pedal with Case, HS70WN Snare Stand, HH75W Hi-Hat Stand, 2x thomann HC73BWN Cymbalboomarm",
	price:387,
	producer:"Tama",
	stock:null,
	sales:0
},
{
	name:"Premier 3500 Hardware Pack",
	description:"Premier 3500 Hardware Pack, including Snare stand, Bass Drum Pedal, Cymbal Boom Stand, Straight Cymbal Stand and Hi-Hat thomann Stand",
	price:189,
	producer:"Premier",
	stock:null,
	sales:0
},
{
	name:"Millenium Pro HW-750 Hardware Pack",
	description:"Millenium Pro Series HW-750 Hardware Pack - HH-750 Hi-Hat stand, CS-750 straight cymbal stand, CB-750 cymbal boom stand, thomann SS-750 snare stand, PD-750 single drum pedal.",
	price:144,
	producer:"Millenium",
	stock:null,
	sales:0
},
{
	name:"Gibraltar Hardware Set 6601 Series",
	description:"Gibraltar Hardware Set, 6600 Series, Set containing: 1x 6606 Snare Drum Stand, 1x 6607 Hi-Hat Stand, 1x 6609 thomann Cymbal Boom Stand, 1x 6610 Cymbal Stand, 1x 6611 Bass Drum Pedal, Double braced tripod assembly with cast height adjustment assemblies and",
	price:311,
	producer:"Gibraltar",
	stock:null,
	sales:0
},
{
	name:"Sonor HS475 Hardware Set",
	description:"Sonor HS 475 Hardware Set, containing : HH 474 Hi-Hat+ SS 477 Snare Ständer+ 2x MBS 473 Cymbal Boom thomann Cymbal Stand+ SP 473 Bass Drum Pedal",
	price:364,
	producer:"Sonor",
	stock:null,
	sales:0
},
{
	name:"Ludwig ASPACK Atlas Standard Pack",
	description:"Ludwig LASPACK Hardware Pack, Atlas Standard Series, complete Hardwarepack",
	price:308,
	producer:"Ludwig",
	stock:null,
	sales:0
},
{
	name:"Mapex HP7005 Hardware Pack",
	description:"Mapex HP7005 Hardwarepack complete from the 700 Series, Hardwarepacket containing P700 Single Bass Drum Pedal, S700 Snare Stand, thomann H700 Hi-Hat Stand, B700 Galgen Cymbalstand, C700 Straight Cymbalstand, all Stands with Multi Touch Ratchet Cymbal Tilt",
	price:337,
	producer:"",
	stock:null,
	sales:0
},
{
	name:"Yamaha HW780 Hardware Pack",
	description:"Yamaha HW780 Hardware Pack - contains bass drum pedal (FP8500B), snare drum stand (SS740A), Hi-Hat stand (HS740A), 2x thomann cymbal boom stands (CS755). All stands have single braced legs for solid stability and safety.",
	price:397,
	producer:"",
	stock:null,
	sales:0
},
{
	name:"Sonor HS275 Hardware Set",
	description:"Sonor HS205 Hardware Set, containing: 2x MBS273 Cymbalboomstands, 1x HH274 Hi-Hat Stand, 1x SS277 Snare Drum Stand, 1x thomann SP473 Bass Drum Pedal, double Braced Stands, medium Heavy Version,",
	price:325,
	producer:"Sonor",
	stock:null,
	sales:0
},
{
	name:"Yamaha HW880 Hardware Set",
	description:"Yamaha HW800 Hardwarepack, Hardware from the 800er Hardware Series, Pack containing: 1x HS850 Hi-Hat Stand, 1x SS850 Snare thomann Stand, 1x FP8500C Single Bass Drum pedal, 2x CS865 Cymbalboomstand without Weight,",
	price:555,
	producer:"Yamaha",
	stock:null,
	sales:0
},
{
	name:"Gibraltar 9601PK Hardware Set",
	description:"Gibraltar 9601PK Hardware Set - 9600 series. Set contains: 1x 9606 snare drum stand, 1x 9607ML-DP Hi-Hat stand (chain thomann drive), 2x 9609-BT boom/straight cymbal stands with brake tilter, 1x 9610-BT straight cymbal stand with brake tilter. Features: m",
	price:418,
	producer:"Gibraltar",
	stock:null,
	sales:0
},
{
	name:"Gibraltar Hardware Set 8601PK Flat Base",
	description:"Gibraltar Hardware Set, 8601PK Serie, Flat Base, 1x 8606 snare drum stand, 1x 8607 Hi-Hat stand, 1x 8609 cymbal thomann boom stand, 1x 8610 cymbal stand, tripod assembly with cast height adjustment assemblies and ABS inserts for no metal-to-metal Contact.",
	price:239,
	producer:"Gibraltar",
	stock:null,
	sales:0
},
{
	name:"Millenium HW-900 Hardware Pack",
	description:"Millenium Pro Series HW-900 Hardware Pack - HH-902 Hi-Hat stand, CS-901 straight cymbal stand, CB-901 cymbal boom stand, thomann SS-901X snare stand and PD-122A single bass drum pedal.",
	price:211,
	producer:"Millenium",
	stock:null,
	sales:0
},
{
	name:"Premier 4000 Hardware Pack",
	description:"Premier Hardwarepack from the 4000er Series, included: 4213 Snare Drum Stand 4214 straight cymbal stand, 4215 Hi-Hat stand, thomann 4216 cymbal boom stand, 0205 bass drum pedal, professional features, \"Flush-Base\", double braced legs",
	price:249,
	producer:"",
	stock:null,
	sales:0
}]);

db.createCollection("sets");
db.sets.insert([{
		name:"Ludwig LC125-BK Accent CS Power Kit",
		description:"Ludwig LC125-BK Accent CS Combo Power complete Set, Features a 22\"x16\" Bass Drum, 16\"x16\" Floor Tom, 12\"x09\" - thomann 13\"x10\" Tom Toms, 14\"x6,5\" Snare Drum, durable PVC finish in color Black, Shells feature 9-ply 8mm select Hardwood Veneers, the Combo Set comes with a 6-pcs lightweight, sturdy double braced hardware from the Ludwig 200 Series that contains Cymbalboomstand (L236MBS), straight Cymbalstand (L226CS), thomann Snare Stand (L222SS), Hi-Hat Stand (L216HH) included Drummerthrone (L247TH), also included a complete Brass Cymbal Set with 14\" Hi-Hat - 16\" Crash and 20\" Ride Cymbal in best Brass Starter Quality Material",
		price:449,
		producer:"Ludwig",
		stock:null,
		sales:0
	},
	{
		name:"Millenium MX500",
		description:"Millenium MX500 5-piece deluxe drum kit - high-gloss lacquered shells, 12\" & 13\" toms, 16\" floor tom, 22\" bass thomann drum, 14\" x 5 1/2\" wooden snare, double-braced hardware. Includes cymbal stand, cymbal boom stand, hi-hat stand, snare stand & bass drum pedal. Colour: High Gloss Black",
		price:248,
		producer:"Millenium",
		stock:null,
		sales:0
	},
	{
		name:"Sonor Smart Force Black Stage 1",
		description:"Sonor Smart Force Series, Stage 1 Model, Color: Black, Set containing 22\"x17,5\" Bass Drum (with Bracket), 12\"x09\" - thomann 13\"x10\" Tom Toms, 16\"x16\" Floor Tom, 14\"x5,5\" Snare Drum, DTH Doubletomholder, 4-pcs doublebraced Hardwarepack containing Hi-Hat Stand (HH174), Snare Stand (SS177), straight Cymbalstand (CS171), Bass Drum Pedal (SP273), 9-layer 7,2mm thickness Poplar Wood Shells, Sonor Designs Tune Safe Tuning Lugs, Ball Clamp Doubletomholder",
		price:483,
		producer:"Sonor",
		stock:null,
		sales:0
	},
	{
		name:"Yamaha Gigmaker Standard Black",
		description:"Yamaha Gigmaker Series standard version - covered basswood shells, 1.0mm x 7-ply (bass drum), 1.0mm x 6-ply (floor thomann toms, tom toms, snare drums), regular steel hoops, single-ply Yamaha heads, Yamaha double tom holder with omni ball system, includes hardware set (1x CS651W straight cymbal stand, HS651W hi-hat stand, SS650W snare stand and FP6110 bass drum pedal. Colour: Black. (Cymbals are not thomann included)",
		price:542,
		producer:"Yamaha",
		stock:null,
		sales:0
	},
	{
		name:"Pearl FZ725Z/B Standard #31",
		description:"Pearl FZ725Z/B Forum FZ Series Drum Kit - standard version, black shell hardware, covered shells, 6-ply 7.5mm poplar thomann shells, TH-70I Tom Tom holder, I.S.S. Tom Tom system. Hardware pack contains: H-72W Hi-Hat stand, S-70W snare stand, P-120P bass drum pedal, C-70W straight cymbal stand, B-70W cymbal boom stand, D-70W drum stool. included Zildjian Planet Z Cymbalset containing 20\" ride, 16\" crash, thomann 14\" Hi-Hat, \"Standard\" shell configuration: 22\" x 18\" bass drum, 12\" x 9\" & 13\" x 10\" toms, 16\" x 16\" floor tom and 14\" x 5.5\" wood snare drum. Colour: Jet Black (#31)",
		price:666,
		producer:"Pearl",
		stock:null,
		sales:0
	},
	{
		name:"Sonor Ascent Creme White Stage 1",
		description:"Sonor Ascent Series, Stage 1 Configuration, Color Creme White (-33), Black Chrome Shell Hardware, Set Configuration containing 22\"x18\" thomann Bass Drum, 12\"x09\" - 13\"x10\" Tom Toms, 16\"x16\" Floor Tom, 14\"x5,5 Snare Drum, 100% Beechwood Shells in 9 layers...",
		price:1999,
		producer:"Sonor",
		stock:null,
		sales:0
	},
	{
		name:"Startone Star Drum Set Standard -BK",
		description:"Startone Star Drum Set, 5-pcs Starter Drum Set containing 10\"x08\" - 12\"x09 Tom Toms, 16\"x16\" Floortom, 14\"x 5 1/2\" thomann Wood Snare Drum all Shells in 6-ply- and 22\"x14\" Bass Drum in 9-ply Poplarwood,doublebraced Hardwareset containing straight Cymbals...",
		price:172,
		producer:"Startone",
		stock:null,
		sales:0
	},
	{
		name:"Millenium MX700 Stage 1 Pro Bundle BBL",
		description:"Millenium MX700 Pro Stage 1 Drum Kit - 22\" x 18\" bass drum, 12\" x 9\" & 13\" x thomann 10\" toms, 16\" x 16\" floor tom and 14\" x 5-1/2\" wood snare. Free suspended rim mounting system for toms, 9-ply birch plywood shells. Includes double braced hardware set c...",
		price:285,
		producer:"Millenium",
		stock:null,
		sales:0
	},
	{
		name:"Pearl TGB-625C Target Standard B#31",
		description:"Pearl TGC-625C, Target Standard Drum Set, Color Black (#31), black hardware, Pearl's entry-level kit with professionell Features, complete thomann Set containing 22\"x16\" Bass Drum, 12\"x10\" - 13\"x11\" Tom Toms, 16\"x16\" Floortom, 14\"x5,5\" Wood Snare Drum, H...",
		price:459,
		producer:"Pearl",
		stock:null,
		sales:0
	},
	{
		name:"Pearl TGC-625C Target Standard #33",
		description:"Pearl TGC-625C, Target Standard Drum Set, Color White (#33), Pearl's entry-level kit with professionell Features, complete Set containing thomann 22\"x16\" Bass Drum, 12\"x10\" - 13\"x11\" Tom Toms, 16\"x16\" Floortom, 14\"x5,5\" Wood Snare Drum, Hi-Hat Stand H-62...",
		price:459,
		producer:"Pearl",
		stock:null,
		sales:0
	},
	{
		name:"Ludwig LC125-BK Accent CS Power Kit",
		description:"Ludwig LC125-BK Accent CS Combo Power complete Set, Features a 22\"x16\" Bass Drum, 16\"x16\" Floor Tom, 12\"x09\" - thomann 13\"x10\" Tom Toms, 14\"x6,5\" Snare Drum, durable PVC finish in color Black, Shells feature 9-ply 8mm select Hardwood Veneers, the Combo Se...",
		price:469,
		producer:"Ludwig",
		stock:null,
		sales:0
	},
	{
		name:"Yamaha Gigmaker Studio Black B-Stock",
		description:"B-Stock, Yamaha Gigmaker Series Standard Drum Kit - shell configuration: 20\" x 16\" bass drum, 10\" x 08\" tom thomann tom, 12\" x 09\" tom tom, 14\" x 14\" floor tom, 14\" x 5.5\" snare drum (wood), covered bass wood shells: 1.0mm x 7-ply (bass drum), 1.0mm x 6-ply (floor toms, tom toms, snare drums), regular steel hoops, single-ply Yamaha heads, Yamaha double thomann tom holder with omni-ball system. Includes hardware set - 1x CS651W straight cymbal stand, HS651W hi-hat stand, SS650W snare stand and FP6110 bass drum pedal. Colour: Black. (Cymbals are nor included), B-Stock with full warranty, may have slight traces of use",
		price:508,
		producer:"Yamaha",
		stock:null,
		sales:0
	},
	{
		name:"Sonor Smart Force Brush Blue Stage 1",
		description:"Sonor Smart Force Series, Stage 1 Model, Color: Brushed Blue, Set containing 22\"x17,5\" Bass Drum (with Bracket), 12\"x09\" thomann - 13\"x10\" Tom Toms, 16\"x16\" Floor Tom, 14\"x5,5\" Snare Drum, DTH Doubletomholder, 4-pcs doublebraced Hardwarepack containing Hi-Hat Stand (HH174), Snare Stand (SS177), straight Cymbalstand (CS171), Bass Drum Pedal (SP273), 9-layer 7,2mm thickness Poplar Wood Shells, Sonor Designs Tune Safe Tuning Lugs, Ball Clamp thomann Doubletomholder,",
		price:532,
		producer:"Sonor",
		stock:null,
		sales:0
	},
	{
		name:"DW PDP BX Standard SOB /Millenium",
		description:"DW PDP BX Series complete Drum Set, Standard Version, Color: Solid Black, Black Shell Hardware. Set configuration: 22\"x18\" Bass Drum, 10\"x08\" - 12\"x09\" Tom Tom, 16\"x16\" Stand Toms, 14\"x5\" Snare Drum, included Millenium Hardwarepack HW-750 containing HH-750 Hi-Hat Stand, CS-750 straight Cymbal Stand, CB-750 Cymbal Boom Stand, SS-750 Snare Stand, PD-750 Single Drum Pedal, included Millenium HL3 Cymbalset containing 14\" Hi-Hat, 16\" Crash and 20\" Ride Cymbal and also included Millenium MDT3 Drummer Throne, DW PDP BX STANDARD SOLID BLACK (order code 235126), MILLENIUM PRO HW-750 HARDWARE PACK (order code 225762), MILLENIUM HL3 CYMBAL SET STANDARD (order code 107163), MILLENIUM MDT4 DRUM THRONE ROUND (order code 190868) Drums / Drum Sets ",
		price:589,
		producer:"DW",
		stock:null,
		sales:0
	},
	{
		name:"Mapex HL5255-CY Standard Cherry",
		description:"Mapex Horizon Series Model HL5255-CY, Set in Standard Version, Color: Transparent Cherry Red (CY), Set containing 22\"x18\" Bass thomann Drum, 12\"x09\" - 13\"x10\" Tom Toms, 16\"x16\" Floor Tom, 14\"x5,5\" Snare Drum, Bass Drum Pedal (P500), Snare Stand (S500), straight Cymbalstand (C500), Cymbalboom Stand (B500), Doubletomholder (TH657), Horizon Set features 7.2mm Birch Basswood mixed shell with lacquered finishes, New double tom holder with thomann auxiliary cymbal placement position, Re-engineered Isolated Tom Mount System (ITS), New tom bracket for quick set up and tear down, New Low-profile cushioned bass drum claws, New 500 series hardware, New Memory Locks For Extra Security on 500 series hardware, New Multi-Sustain Cymbal thomann Felts on 500 series hardware, New retractable Boom arm, Remo® equipped, inlcunding self-muffling bass drum heads",
		price:675,
		producer:"Mapex",
		stock:null,
		sales:0
	},
	{
		name:"Gretsch G2 Series Standard Grey",
		description:"Gretsch G2 Series complete Drumset, Configuration Standard / Fusion, Color: Grey Steel (GS), PVC Wraped covered, Chrome Shell thomann Hardware, Poplar Wood Shells, 30° Bearing Edge on Toms and 45° on Snare, 1,6mm Steel Hoops, Set containing 22\"x18\" Bass Drum, 14\"x5,5\" Snare Drum, 10\"x07\" - 12\"x08\" Tom Tom, 16\"x16\" Floor Tom, Snare Stand, Hi-Hat Stand, Cymbal Boom Stand, straight Cymbalstand, Bass Drum thomann Pedal also Sabian Sbr Brass Cymbal Set 14\" Hi-Hat - 16\" Crash - 20\" Ride,",
		price:629,
		producer:"Gretsch",
		stock:null,
		sales:0
	},
	{
		name:"Yamaha Stage Custom Birch Std. NW",
		description:"Yamaha Stage Custom Birch Series \"Standard\" Drum Kit - high quality lacquered shells, 100% birch wood. Powerful, warm, thomann dynamic and clear attack. Shell configuration: 22\" x 17\" bass drum, 10\" x 8\" & 12\" x 9\" toms, 16\" x 16\" floor tom, 14\" x 5.5\" BSD0655 wood snare. 700 single-braced hardware pack containing: 2x CS755 cymbal boom stands, 1x HS740A Hi-Hat stand, thomann 1x SS745A snare stand, 1x FP7210 single bass drum pedal. Colour: Natural Wood (NW)",
		price:990,
		producer:"Yamaha",
		stock:null,
		sales:0
	},
	{
		name:"Tama SK52HXZB5-RCS",
		description:"Tama SK52HXZB5-RCS, Superstar \"Hyper Indie-Pop\" Drum Set, Unicolor Series, Covered Version, Cover Color: Red Cameleon Sparkle (RCS), Hardware thomann Parts in Black Nickel Finish, Covered 100% Birch Shells, Bass Drum 7mm - 7 ply Shell, Toms-Floortoms-Snaredrum 6mm - 6 ply Shell, Die Cast Hoop with integrated Star Cast Tom Mount System on all mounted Shells, Bass Drum with Woodhoop in Setcolor, Snare thomann Drum with Die Cast Hoop, continuous Rubberplated \"Sound Bridge\" Hi-Tension Lugs with minimum Shell Contact, Rubberplated Bass Drum Guss Die Cast Claws, Set Configuration: 22\"x20\" Bass Drum without Bass Drum Holder, 10\"x6,5\" and 12\"x07\" Tom Tom, 16\"x14\" Floor Tom, 14\"x5,5\" Wood Snare Drum, thomann 2x MC69 Tomholder Combi Stand Clamp, included Hardwarepackage containing: Single Bass Drum Pedal, Hi-Hat Stand, Snare Stand, Cymbal Boom Stand, Straight Cymbal Stand,",
		price:1050,
		producer:"Tama",
		stock:null,
		sales:0
	},
	{
		name:"Gretsch G2 Series Standard Red",
		description:"Gretsch G2 Series complete Drumset, Configuration Standard / Fusion, Color: Dark Red Metallic (DR), PVC Wraped covered, Chrome thomann Shell Hardware, Poplar Wood Shells, 30\° Bearing Edge on Toms and 45° on Snare, 1,6mm Steel Hoops, Set containing 22\"x18\" Bass Drum, 14\"x5,5\" Snare Drum, 10\"x07\" - 12\"x08\" Tom Tom, 16\"x16\" Floor Tom, Snare Stand, Hi-Hat Stand, Cymbal Boom Stand, straight Cymbalstand, Bass thomann Drum Pedal also Sabian Sbr Brass Cymbal Set 14\" Hi-Hat - 16\" Crash - 20\" Ride,",
		price:629,
		producer:"Gretsch",
		stock:null,
		sales:0
	},
	{
		name:"Millenium MX900 T-Drive Stage Birch -WS",
		description:"Millenium MX900 T-Drive Stage Birch Set, 900 Series, 6-ply Bichwoodshells in highgloss lacquered Sparkle Finish, Color: White Sparkle thomann (#WS), Black Nickel Shell Hardware, Drumset included Satin Finish Hardware, Shellkonfiguration containing 22\"x18\" Bass Drum w/o Bracket, 14\"x6,5\" Snare Drum, 10\"x08\" - 12\"x09\" Tom Toms with Free Suspended Tom Mount System and 2x Tom Tom Holders, 14\"x12\" - 16\"x14\" Floor Toms, all Shells thomann with Remo UT Drumheads, included Hardwarepack in Satin Chrome Finish containing Snare Stand, Hi-Hat Stand, 2x Cymbal Boom Stand, Single Bass Drum Pedal and 2x Multiclamps, Set included also Sound control Set with 18\" Bass Drum Muffler cushion and Sound Control Ring Set thomann 10-12-14-14-16, Cymbals not included,",
		price:379,
		producer:"Millenium",
		stock:null,
		sales:0
	}
]);