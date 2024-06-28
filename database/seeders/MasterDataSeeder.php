<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_asset_category')->insert([
            [
                'assetCategory' => 'Buildings and Structure',
                'assetClass' => 1000,
                'assetGroup' => 'Land',
                'depreciationCom' => 0,
                'depreciationFis' => 0,
            ],
            [
                'assetCategory' => 'Buildings and Structure',
                'assetClass' => 2000,
                'assetGroup' => 'Building',
                'depreciationCom' => 240,
                'depreciationFis' => 240,
            ],
            [
                'assetCategory' => 'Property and Investment',
                'assetClass' => 2100,
                'assetGroup' => 'Property and Investment',
                'depreciationCom' => 0,
                'depreciationFis' => 0,
            ],
            [
                'assetCategory' => 'Machinery and Equipment',
                'assetClass' => 3000,
                'assetGroup' => 'Machine1',
                'depreciationCom' => 84,
                'depreciationFis' => 84,
            ],
            [
                'assetCategory' => 'Machinery and Equipment',
                'assetClass' => 3000,
                'assetGroup' => 'Machine2',
                'depreciationCom' => 120,
                'depreciationFis' => 120,
            ],
            [
                'assetCategory' => 'Machinery and Equipment',
                'assetClass' => 3100,
                'assetGroup' => 'Machine Accessories',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'Vehicle',
                'assetClass' => 4000,
                'assetGroup' => 'Vehicle',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'Office Equipment and Furniture',
                'assetClass' => 5000,
                'assetGroup' => 'Office Equipment',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'Office Equipment and Furniture',
                'assetClass' => 6000,
                'assetGroup' => 'Furniture',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'CIP',
                'assetClass' => 7000,
                'assetGroup' => 'CIP',
                'depreciationCom' => 0,
                'depreciationFis' => 0,
            ],
            [
                'assetCategory' => 'Land Right',
                'assetClass' => 7500,
                'assetGroup' => 'Land Right',
                'depreciationCom' => 300,
                'depreciationFis' => 300,
            ],
            [
                'assetCategory' => 'Diferred Charges',
                'assetClass' => 7600,
                'assetGroup' => 'Diferred Charges',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'Low Value Asset',
                'assetClass' => 8000,
                'assetGroup' => 'LVA Plant',
                'depreciationCom' => 1,
                'depreciationFis' => 1,
            ],
            [
                'assetCategory' => 'Low Value Asset',
                'assetClass' => 9000,
                'assetGroup' => 'LVA Office',
                'depreciationCom' => 1,
                'depreciationFis' => 1,
            ]
        ]);

        DB::table('mastercostcentre')->insert([

            
            [
                "name"=> "ACC001",
                "deptDetail"=> "General Acct. & Tax",
                "dept"=> "Accounting"
            ],
            [
                "name"=> "ACC002",
                "deptDetail"=> "Cost Accounting 1",
                "dept"=> "Accounting"
            ],
            [
                "name"=> "ACC003",
                "deptDetail"=> "Cost Accounting 2",
                "dept"=> "Accounting"
            ],
            [
                "name"=> "ACC004",
                "deptDetail"=> "Cost Control",
                "dept"=> "Accounting"
            ],
            [
                "name"=> "ACC005",
                "deptDetail"=> "Inventory Control",
                "dept"=> "Accounting"
            ],
            [
                "name"=> "ASCA01",
                "deptDetail"=> "Assy Door Check",
                "dept"=> "Prod. 2"
            ],
            [
                "name"=> "ASCA02",
                "deptDetail"=> "Assy Door Check 02",
                "dept"=> "Prod. 2"
            ],
            [
                "name"=> "ASCC01",
                "deptDetail"=> "Assy Clutch Cover 01",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASCC02",
                "deptDetail"=> "Assy Clutch Cover 02",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASCC03",
                "deptDetail"=> "Assy Clutch Cover 03",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASCC04",
                "deptDetail"=> "Assy Clutch Cover 04",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASCC05",
                "deptDetail"=> "Assy Clutch Cover 05",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASCD01",
                "deptDetail"=> "Assy Clutch Disc 01",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASCD02",
                "deptDetail"=> "Assy Clutch Disc 02",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASCD03",
                "deptDetail"=> "Assy Clutch Disc 03",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASCH01",
                "deptDetail"=> "Assy CHC 01",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "ASDF01",
                "deptDetail"=> "Assy D/F 01",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF02",
                "deptDetail"=> "Assy D/F 02",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF03",
                "deptDetail"=> "Assy D/F 03",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF04",
                "deptDetail"=> "Assy D/F 04",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF05",
                "deptDetail"=> "Assy D/F 05",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF06",
                "deptDetail"=> "Assy D/F 06",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF07",
                "deptDetail"=> "Assy D/F 07",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF08",
                "deptDetail"=> "Assy D/F 08",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF09",
                "deptDetail"=> "Assy D/F 09",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF10",
                "deptDetail"=> "Assy D/F 10",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDF11",
                "deptDetail"=> "Assy D/F 11",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASDH01",
                "deptDetail"=> "Assy D/Hinge 01",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDH02",
                "deptDetail"=> "Assy D/Hinge 02",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDH03",
                "deptDetail"=> "Assy D/Hinge 03",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL01",
                "deptDetail"=> "Assy D/L 01",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL02",
                "deptDetail"=> "Assy D/L 02",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL03",
                "deptDetail"=> "Assy D/L 03",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL04",
                "deptDetail"=> "Assy D/L 04",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL05",
                "deptDetail"=> "Assy D/L 05",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL06",
                "deptDetail"=> "Assy D/L 06",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL07",
                "deptDetail"=> "Assy D/L 07",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL08",
                "deptDetail"=> "Assy D/L 08",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL09",
                "deptDetail"=> "Assy D/L 09",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL10",
                "deptDetail"=> "Assy D/L 10",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL11",
                "deptDetail"=> "Assy D/L 11",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL12",
                "deptDetail"=> "Assy D/L 12",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL13",
                "deptDetail"=> "Assy D/L 13",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASDL14",
                "deptDetail"=> "Assy D/L 14",
                "dept"=> "Production"
            ],
            [
                "name"=> "ASDL15",
                "deptDetail"=> "Assy D/L 15",
                "dept"=> "Production"
            ],
            [
                "name"=> "ASGA01",
                "deptDetail"=> "Assy Garnish 01",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHD01",
                "deptDetail"=> "Assy Handle 01",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHD02",
                "deptDetail"=> "Assy Handle 02",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHD03",
                "deptDetail"=> "Assy Handle 03",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHD04",
                "deptDetail"=> "Assy Handle 04",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHD05",
                "deptDetail"=> "Assy Handle 05",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHD06",
                "deptDetail"=> "Assy Handle 06",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHD07",
                "deptDetail"=> "Assy Handle 07",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHD09",
                "deptDetail"=> "Assy Handle 09",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHL01",
                "deptDetail"=> "Assy H/L",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHL02",
                "deptDetail"=> "Assy H/L",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASHV01",
                "deptDetail"=> "ASHV01",
                "dept"=> "Production"
            ],
            [
                "name"=> "ASIM01",
                "deptDetail"=> "Assy I/M 01",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "ASIM02",
                "deptDetail"=> "Assy I/M 02",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "ASIM03",
                "deptDetail"=> "Assy I/M 03",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "ASIM04",
                "deptDetail"=> "Assy I/M D16D Line 2",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "ASIM05",
                "deptDetail"=> "Assy I/M D16D Line 5",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "ASOP01",
                "deptDetail"=> "Assy Oil Pump 01",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASPD01",
                "deptDetail"=> "Assy Center Rail 01",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASRH01",
                "deptDetail"=> "Assy Roller PSD 01",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "ASST01",
                "deptDetail"=> "Mfg Striker 01",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASST02",
                "deptDetail"=> "Mfg Striker 02",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASST03",
                "deptDetail"=> "Mfg Striker 03",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASST04",
                "deptDetail"=> "Mfg Striker 04",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASWP01",
                "deptDetail"=> "Assy Water Pump 01",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "ASWR01",
                "deptDetail"=> "Assy W/R 01",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "ASWR02",
                "deptDetail"=> "Assy W/R 02",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "BDDF01",
                "deptDetail"=> "Mfg D/F BD 01",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "BDDF02",
                "deptDetail"=> "Mfg D/F BD 02",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "BDDF03",
                "deptDetail"=> "Mfg D/F BD 03",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "BDDF04",
                "deptDetail"=> "Mfg D/F BD 04",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "BDST01",
                "deptDetail"=> "Bending Striker 01",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "BDST02",
                "deptDetail"=> "Bending Striker 02",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "BRST01",
                "deptDetail"=> "Barel Striker 01",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "CCO001",
                "deptDetail"=> "Cost Control",
                "dept"=> "Cost Control"
            ],
            [
                "name"=> "COM001",
                "deptDetail"=> "Committee QCC",
                "dept"=> "Management"
            ],
            [
                "name"=> "COM002",
                "deptDetail"=> "Committee P2K3L",
                "dept"=> "Management"
            ],
            [
                "name"=> "DM0001",
                "deptDetail"=> "Dies / Mould Mainten",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "DS0001",
                "deptDetail"=> "Design & Tool Making",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "ENG001",
                "deptDetail"=> "Body Part",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "ENG002",
                "deptDetail"=> "Clutch Part",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "ENG003",
                "deptDetail"=> "Press Part",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "ENG004",
                "deptDetail"=> "Engine Part",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "ENG005",
                "deptDetail"=> "DF & Platting",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "ENG006",
                "deptDetail"=> "Door Lock",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "ENG007",
                "deptDetail"=> "EQDEV",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "ENG008",
                "deptDetail"=> "Tooling Development",
                "dept"=> "Engineering"
            ],
            [
                "name"=> "FIN001",
                "deptDetail"=> "Budget",
                "dept"=> "Finance"
            ],
            [
                "name"=> "FIN002",
                "deptDetail"=> "Finance Admin.",
                "dept"=> "Finance"
            ],
            [
                "name"=> "GAF001",
                "deptDetail"=> "General Service",
                "dept"=> "General Affa"
            ],
            [
                "name"=> "GAF002",
                "deptDetail"=> "Legal Government",
                "dept"=> "General Affa"
            ],
            [
                "name"=> "GAF003",
                "deptDetail"=> "Security & Comm. Rel",
                "dept"=> "General Affa"
            ],
            [
                "name"=> "GIIH01",
                "deptDetail"=> "Plating Inhouse",
                "dept"=> "Prod. 1"
            ],
            [
                "name"=> "HRD001",
                "deptDetail"=> "People Development",
                "dept"=> "HRD"
            ],
            [
                "name"=> "HRD002",
                "deptDetail"=> "Training",
                "dept"=> "HRD"
            ],
            [
                "name"=> "HRD003",
                "deptDetail"=> "Recruitment",
                "dept"=> "HRD"
            ],
            [
                "name"=> "HRD004",
                "deptDetail"=> "Personnel Admin.",
                "dept"=> "HRD"
            ],
            [
                "name"=> "HRD005",
                "deptDetail"=> "Industrial Relation",
                "dept"=> "HRD"
            ],
            [
                "name"=> "HT001A",
                "deptDetail"=> "HT New UBE-600 mch",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "HT001B",
                "deptDetail"=> "HT Old UBE-600 mch",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "HT002A",
                "deptDetail"=> "HT Old BTF-600 mch",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "HT002B",
                "deptDetail"=> "HT New BTF-600 mch",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "HT003A",
                "deptDetail"=> "HT BCA-600 mch",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "HTCD01",
                "deptDetail"=> "Mfg H/T 01",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "HTDS01",
                "deptDetail"=> "Mfg Diapraghm Spring",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "HTDS02",
                "deptDetail"=> "Mfg Diapraghm Spring",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "HTST01",
                "deptDetail"=> "Mfg HT Striker 01",
                "dept"=> "Prod.3"
            ],
            [
                "name"=> "HTST02",
                "deptDetail"=> "Mfg HT Striker 02",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "HTWR01",
                "deptDetail"=> "Mfg Induction",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "IA0001",
                "deptDetail"=> "Internal Audit",
                "dept"=> "AU"
            ],
            [
                "name"=> "IRL001",
                "deptDetail"=> "INDUSTRIAL RELATION",
                "dept"=> "IRL"
            ],
            [
                "name"=> "IRL002",
                "deptDetail"=> "LEGAL GOVERNMENT",
                "dept"=> "IRL"
            ],
            [
                "name"=> "KZN001",
                "deptDetail"=> "Kaizen",
                "dept"=> "Kaizen"
            ],
            [
                "name"=> "MADF01",
                "deptDetail"=> "We Line Tapping",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "MADL01",
                "deptDetail"=> "Mfg Machining D/L",
                "dept"=> "Prod. 1"
            ],
            [
                "name"=> "MADS01",
                "deptDetail"=> "Machining DSp 01",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "MADS02",
                "deptDetail"=> "Machining DSp 02",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "MADS03",
                "deptDetail"=> "Machining DSp 03",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "MADS04",
                "deptDetail"=> "Machining DSp 04",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "MAHC01",
                "deptDetail"=> "Mfg Hub Clutch",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "MAPR01",
                "deptDetail"=> "Mfg Pivot Ring C/C",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "MFDF01",
                "deptDetail"=> "Mfg Drip Channel",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "MGT001",
                "deptDetail"=> "Management  Prod.",
                "dept"=> "Management"
            ],
            [
                "name"=> "MGT002",
                "deptDetail"=> "Management  Admin.",
                "dept"=> "Management"
            ],
            [
                "name"=> "MGT003",
                "deptDetail"=> "Management  MKT-PUR",
                "dept"=> "Management"
            ],
            [
                "name"=> "MIS001",
                "deptDetail"=> "MIS",
                "dept"=> "MIS"
            ],
            [
                "name"=> "MKT001",
                "deptDetail"=> "OEM & GNP / AM",
                "dept"=> "Marketing"
            ],
            [
                "name"=> "MSU001",
                "deptDetail"=> "Mfg.Support & Eductn",
                "dept"=> "MSU"
            ],
            [
                "name"=> "MSU002",
                "deptDetail"=> "Mfg.Support (QSA)",
                "dept"=> "MSU"
            ],
            [
                "name"=> "MTE001",
                "deptDetail"=> "M & E Maintenance",
                "dept"=> "Maintenance"
            ],
            [
                "name"=> "MTE002",
                "deptDetail"=> "Equipments Develpmnt",
                "dept"=> "Maintenance"
            ],
            [
                "name"=> "MTE003",
                "deptDetail"=> "DIES/MOLD MTE",
                "dept"=> "Maintenance"
            ],
            [
                "name"=> "PC001A",
                "deptDetail"=> "Mfg Injection PC01A",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC001B",
                "deptDetail"=> "Mfg Injection PC01B",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC001C",
                "deptDetail"=> "Mfg Injection PC01C",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC001D",
                "deptDetail"=> "Mfg Injection PC01D",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002A",
                "deptDetail"=> "Mfg Injection PC02A",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002B",
                "deptDetail"=> "Mfg Injection PC02B",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002C",
                "deptDetail"=> "Mfg Injection PC02C",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002D",
                "deptDetail"=> "Mfg Injection PC02D",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002E",
                "deptDetail"=> "Mfg Injection PC02E",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002F",
                "deptDetail"=> "Mfg Injection PC02F",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002G",
                "deptDetail"=> "Mfg Injection PC02G",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002H",
                "deptDetail"=> "Mfg Injection PC02H",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002I",
                "deptDetail"=> "Mfg Injection PC02I",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002J",
                "deptDetail"=> "Mfg Injection PC02J",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002K",
                "deptDetail"=> "Mfg Injection PC02K",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002L",
                "deptDetail"=> "Mfg Injection PC02L",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002M",
                "deptDetail"=> "Mfg Injection PC02M",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002N",
                "deptDetail"=> "Mfg Injection PC02N",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002O",
                "deptDetail"=> "Mfg Injection PC02O",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002P",
                "deptDetail"=> "Mfg Injection PC02P",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002Q",
                "deptDetail"=> "Mfg Injection PC02Q",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002R",
                "deptDetail"=> "Mfg Injection PC02R",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002S",
                "deptDetail"=> "Mfg Injection PC02S",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002T",
                "deptDetail"=> "Mfg Injection PC02T",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002U",
                "deptDetail"=> "Mfg Injection PC02U",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002V",
                "deptDetail"=> "Mfg Injection PC02V",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC002W",
                "deptDetail"=> "Mfg Injection PC02W",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC003A",
                "deptDetail"=> "Mfg Injection PC03A",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC003B",
                "deptDetail"=> "Mfg Injection PC03B",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC003C",
                "deptDetail"=> "Mfg Injection PC03C",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC003D",
                "deptDetail"=> "Mfg Injection PC03D",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC003E",
                "deptDetail"=> "Mfg Injection PC03E",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC003F",
                "deptDetail"=> "Mfg Injection PC03F",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC003G",
                "deptDetail"=> "Mfg Injection PC03G",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC003H",
                "deptDetail"=> "Mfg Injection PC03H",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PC003I",
                "deptDetail"=> "Mfg Injection PC03I",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PCO001",
                "deptDetail"=> "New Project",
                "dept"=> "Prod.Control"
            ],
            [
                "name"=> "PK0001",
                "deptDetail"=> "Packing DL Siam",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "PK0002",
                "deptDetail"=> "Packing Domestic",
                "dept"=> "Prod. 4"
            ],
            [
                "name"=> "PK0003",
                "deptDetail"=> "Packing DF ANL",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "PK0004",
                "deptDetail"=> "Packing CC & CD",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "PK0005",
                "deptDetail"=> "Packing Door Lock",
                "dept"=> "Production"
            ],
            [
                "name"=> "PK004A",
                "deptDetail"=> "Packing CD 02",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "PK004C",
                "deptDetail"=> "Packing CD 03",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "PK004D",
                "deptDetail"=> "Packing CC 01",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "PK004E",
                "deptDetail"=> "Packing CC 02",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "PP0001",
                "deptDetail"=> "Raw Mat.& Warehouse",
                "dept"=> "PPIC"
            ],
            [
                "name"=> "PP0002",
                "deptDetail"=> "Production Control",
                "dept"=> "PPIC"
            ],
            [
                "name"=> "PP0003",
                "deptDetail"=> "Component",
                "dept"=> "PPIC"
            ],
            [
                "name"=> "PP0004",
                "deptDetail"=> "Delivery",
                "dept"=> "PPIC"
            ],
            [
                "name"=> "PP0005",
                "deptDetail"=> "Inv. Control & Proj.",
                "dept"=> "PPIC"
            ],
            [
                "name"=> "PP0006",
                "deptDetail"=> "New Project",
                "dept"=> "PPIC"
            ],
            [
                "name"=> "PR001A",
                "deptDetail"=> "Mfg Stamping PR01A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR001B",
                "deptDetail"=> "Mfg Stamping PR01B",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR002A",
                "deptDetail"=> "Mfg Stamping PR02A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR002B",
                "deptDetail"=> "Mfg Stamping PR02B",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR002C",
                "deptDetail"=> "Mfg Stamping PR02C",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR002D",
                "deptDetail"=> "Mfg Stamping PR02D",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR002E",
                "deptDetail"=> "Mfg Stamping PR002E",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR003A",
                "deptDetail"=> "Mfg Stamping PR03A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR003B",
                "deptDetail"=> "Mfg Stamping PR03B",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR003C",
                "deptDetail"=> "Mfg Stamping PR03C",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR003D",
                "deptDetail"=> "Mfg Stamping PR003D",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR003E",
                "deptDetail"=> "Mfg Stamping PR003E",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR004A",
                "deptDetail"=> "Mfg Stamping PR04A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR004B",
                "deptDetail"=> "Mfg Stamping PR04B",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR004C",
                "deptDetail"=> "Mfg Stamping PR004C",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR005A",
                "deptDetail"=> "Mfg Stamping PR05A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006A",
                "deptDetail"=> "Mfg Stamping PR06A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006B",
                "deptDetail"=> "Mfg Stamping PR06B",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006C",
                "deptDetail"=> "Mfg Stamping PR06C",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006D",
                "deptDetail"=> "Mfg Stamping PR06D",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006E",
                "deptDetail"=> "Mfg Stamping PR06E",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006F",
                "deptDetail"=> "Mfg Stamping PR06F",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006G",
                "deptDetail"=> "Mfg Stamping PR06G",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006H",
                "deptDetail"=> "Mfg Stamping PR06H",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006I",
                "deptDetail"=> "Mfg Stamping PR06I",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006J",
                "deptDetail"=> "Mfg Stamping PR06J",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006K",
                "deptDetail"=> "Mfg Stamping PR06K",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006L",
                "deptDetail"=> "Mfg Stamping PR06L",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006M",
                "deptDetail"=> "Mfg Stamping PR06M",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006N",
                "deptDetail"=> "Mfg Stamping PR006N",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006O",
                "deptDetail"=> "Mfg Stamping PR006O",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006P",
                "deptDetail"=> "Mfg Stamping PR006P",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR006Q",
                "deptDetail"=> "Mfg Stamping PR006Q",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR007A",
                "deptDetail"=> "Mfg Stamping PR07A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR007B",
                "deptDetail"=> "Mfg Stamping PR07B",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR007C",
                "deptDetail"=> "Mfg Stamping PR07C",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR008A",
                "deptDetail"=> "Mfg Stamping PR08A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR008B",
                "deptDetail"=> "Mfg Stamping PR08B",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR008C",
                "deptDetail"=> "Mfg Stamping PR08C",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR008D",
                "deptDetail"=> "Mfg Stamping PR08D",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR008E",
                "deptDetail"=> "Mfg Stamping PR08E",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR009A",
                "deptDetail"=> "Mfg Stamping PR09A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR009B",
                "deptDetail"=> "Mfg Stamping PR09B",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR009C",
                "deptDetail"=> "Mfg Stamping PR09C",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR009D",
                "deptDetail"=> "Mfg Stamping PR09D",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR009E",
                "deptDetail"=> "Mfg Stamping PR09E",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PR010A",
                "deptDetail"=> "Mfg Stamping PR010A",
                "dept"=> "Prod.4"
            ],
            [
                "name"=> "PRDF01",
                "deptDetail"=> "Trimming D/F",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "PRDF02",
                "deptDetail"=> "Trimming D/F",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "PRDF03",
                "deptDetail"=> "Trimming D/F 03",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "PUR001",
                "deptDetail"=> "Purchasing Local",
                "dept"=> "Purchasing"
            ],
            [
                "name"=> "PUR002",
                "deptDetail"=> "Purchasing Import",
                "dept"=> "Purchasing"
            ],
            [
                "name"=> "PUR003",
                "deptDetail"=> "Localization",
                "dept"=> "Purchasing"
            ],
            [
                "name"=> "QA0001",
                "deptDetail"=> "Quality Assurance",
                "dept"=> "Quality Assu"
            ],
            [
                "name"=> "QC0001",
                "deptDetail"=> "Quality Control",
                "dept"=> "Quality Assu"
            ],
            [
                "name"=> "RFDF01",
                "deptDetail"=> "Mfg Roll Forming 01",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "RFDF02",
                "deptDetail"=> "Mfg Roll Forming 02",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "RFDF03",
                "deptDetail"=> "Mfg Roll Forming 03",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "RFDF04",
                "deptDetail"=> "Mfg Roll Forming 04",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "RFDF05",
                "deptDetail"=> "Mfg Roll Forming 05",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "RFDF06",
                "deptDetail"=> "Mfg Roll Forming 06",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "RND001",
                "deptDetail"=> "PROJECT PREPARATION",
                "dept"=> "RND"
            ],
            [
                "name"=> "RND002",
                "deptDetail"=> "PROJECT ENGINEERING",
                "dept"=> "RND"
            ],
            [
                "name"=> "SACC01",
                "deptDetail"=> "S/A Clutch Cover",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SACC02",
                "deptDetail"=> "S/A Clutch Cover 02",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SACC03",
                "deptDetail"=> "S/A Clutch Cover 03",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SACC05",
                "deptDetail"=> "SACC05",
                "dept"=> "Produksi"
            ],
            [
                "name"=> "SACD01",
                "deptDetail"=> "S/A Clutch Disc",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SACD02",
                "deptDetail"=> "S/A Clutch Disc 02",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SACD03",
                "deptDetail"=> "S/A Clutch Disc 03",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SACD04",
                "deptDetail"=> "S/A Clutch Disc 04",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SACD05",
                "deptDetail"=> "S/A Clutch Disc",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SACD06",
                "deptDetail"=> "S/A Clutch Disc",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SACD07",
                "deptDetail"=> "S/A Clutch Disc",
                "dept"=> "Prod. 3"
            ],
            [
                "name"=> "SADF01",
                "deptDetail"=> "Mfg D/F S/A 01",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADF02",
                "deptDetail"=> "Mfg D/F S/A 02",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADF03",
                "deptDetail"=> "Mfg D/F S/A 03",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADF04",
                "deptDetail"=> "Mfg D/F S/A 04",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADF05",
                "deptDetail"=> "Mfg D/F S/A 05",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADF06",
                "deptDetail"=> "Mfg D/F S/A 06",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADF07",
                "deptDetail"=> "Mfg D/F S/A 07",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADF08",
                "deptDetail"=> "Mfg D/F S/A 08",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADF09",
                "deptDetail"=> "Mfg D/F S/A 09",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADF10",
                "deptDetail"=> "Mfg D/F S/A 10",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SADL01",
                "deptDetail"=> "SUB ASSY D/L 01",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL02",
                "deptDetail"=> "SUB ASSY D/L 02",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL03",
                "deptDetail"=> "SUB ASSY D/L 03",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL04",
                "deptDetail"=> "SUB ASSY D/L 04",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL05",
                "deptDetail"=> "SUB ASSY D/L 05",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL06",
                "deptDetail"=> "SUB ASSY D/L 06",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL07",
                "deptDetail"=> "SUB ASSY D/L 07",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL08",
                "deptDetail"=> "SUB ASSY D/L 08",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL09",
                "deptDetail"=> "SUB ASSY D/L 09",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL10",
                "deptDetail"=> "SUB ASSY D/L 10",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL11",
                "deptDetail"=> "SUB ASSY D/L 11",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL12",
                "deptDetail"=> "SUB ASSY D/L 12",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL13",
                "deptDetail"=> "SUB ASSY D/L 13",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL14",
                "deptDetail"=> "SUB ASSY D/L 14",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL15",
                "deptDetail"=> "SUB ASSY D/L 15",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL16",
                "deptDetail"=> "SUB ASSY D/L 16",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL17",
                "deptDetail"=> "SUB ASSY D/L 17",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL18",
                "deptDetail"=> "SUB ASSY D/L 18",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL19",
                "deptDetail"=> "SUB ASSY D/L 19",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL20",
                "deptDetail"=> "SUB ASSY D/L 20",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SADL21",
                "deptDetail"=> "SUB ASSY D/L 21",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "SAHV01",
                "deptDetail"=> "SAHV01",
                "dept"=> "Production"
            ],
            [
                "name"=> "SAHV02",
                "deptDetail"=> "SAHV02",
                "dept"=> "Production"
            ],
            [
                "name"=> "SAHV03",
                "deptDetail"=> "SAHV03",
                "dept"=> "Production"
            ],
            [
                "name"=> "SBDF01",
                "deptDetail"=> "Mfg D/F Bending 01",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SBDF02",
                "deptDetail"=> "Mfg D/F Bending 02",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SBDF03",
                "deptDetail"=> "Mfg D/F Bending 03",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SBDF04",
                "deptDetail"=> "Mfg D/F Bending 04",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "SBDF05",
                "deptDetail"=> "Mfg D/F Bending 05",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WASH01",
                "deptDetail"=> "WASH01",
                "dept"=> "Production"
            ],
            [
                "name"=> "WASH02",
                "deptDetail"=> "WASH02",
                "dept"=> "Production"
            ],
            [
                "name"=> "WDF13",
                "deptDetail"=> "Mfg D/F Welding 13",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WECR01",
                "deptDetail"=> "Mfg Weld Center Rail",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WECR02",
                "deptDetail"=> "Mfg Weld Center Rail",
                "dept"=> "BRP"
            ],
            [
                "name"=> "WEDF01",
                "deptDetail"=> "Mfg D/F Welding 01",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF02",
                "deptDetail"=> "Mfg D/F Welding 02",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF03",
                "deptDetail"=> "Mfg D/F Welding 03",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF04",
                "deptDetail"=> "Mfg D/F Welding 04",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF05",
                "deptDetail"=> "Mfg D/F Welding 05",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF06",
                "deptDetail"=> "Mfg D/F Welding 06",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF07",
                "deptDetail"=> "Mfg D/F Welding 07",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF08",
                "deptDetail"=> "Mfg D/F Welding 08",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF09",
                "deptDetail"=> "Mfg D/F Welding 09",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF09A",
                "deptDetail"=> "Mfg D/F Welding 09A",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF10",
                "deptDetail"=> "Mfg D/F Welding 10",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF11",
                "deptDetail"=> "Mfg D/F Welding 11",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF12",
                "deptDetail"=> "Mfg D/F Welding 12",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF13",
                "deptDetail"=> "Mfg D/F Welding 13",
                "dept"=> "Prod.1"
            ],
            [
                "name"=> "WEDF15",
                "deptDetail"=> "WEDF15",
                "dept"=> "PROD 1"
            ],
            [
                "name"=> "WEDH01",
                "deptDetail"=> "Mfg WE Back D/H",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "WEHL01",
                "deptDetail"=> "Mfg WE H/L",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "WEWR02",
                "deptDetail"=> "WE WR LAG 02 RR",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "WEWR03",
                "deptDetail"=> "WE WR LAG 01 FR",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "WEWR04",
                "deptDetail"=> "Mfg We  DL",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "WEWR05",
                "deptDetail"=> "Spot WE WR EAB/LAB",
                "dept"=> "Prod.2"
            ],
            [
                "name"=> "WEWR06",
                "deptDetail"=> "WE WR Retainer",
                "dept"=> "Prod.2"
            ]

        ]);

        DB::table('masterline')->insert([
            ['line' => 'ACC001'],
            ['line' => 'ACC002'],
            ['line' => 'ACC003'],
            ['line' => 'ACC004'],
            ['line' => 'ACC005'],
            ['line' => 'ASCA01'],
            ['line' => 'ASCA02'],
            ['line' => 'ASCC01'],
            ['line' => 'ASCC02'],
            ['line' => 'ASCC03'],
            ['line' => 'ASCC04'],
            ['line' => 'ASCC05'],
            ['line' => 'ASCD01'],
            ['line' => 'ASCD02'],
            ['line' => 'ASCD03'],
            ['line' => 'ASCH01'],
            ['line' => 'ASDF01'],
            ['line' => 'ASDF02'],
            ['line' => 'ASDF03'],
            ['line' => 'ASDF04'],
            ['line' => 'ASDF05'],
            ['line' => 'ASDF06'],
            ['line' => 'ASDF07'],
            ['line' => 'ASDF08'],
            ['line' => 'ASDF09'],
            ['line' => 'ASDF10'],
            ['line' => 'ASDF11'],
            ['line' => 'ASDH01'],
            ['line' => 'ASDH02'],
            ['line' => 'ASDH03'],
            ['line' => 'ASDL01'],
            ['line' => 'ASDL02'],
            ['line' => 'ASDL03'],
            ['line' => 'ASDL04'],
            ['line' => 'ASDL05'],
            ['line' => 'ASDL06'],
            ['line' => 'ASDL07'],
            ['line' => 'ASDL08'],
            ['line' => 'ASDL09'],
            ['line' => 'ASDL10'],
            ['line' => 'ASDL11'],
            ['line' => 'ASDL12'],
            ['line' => 'ASDL13'],
            ['line' => 'ASDL14'],
            ['line' => 'ASDL15'],
            ['line' => 'ASGA01'],
            ['line' => 'ASHD01'],
            ['line' => 'ASHD02'],
            ['line' => 'ASHD03'],
            ['line' => 'ASHD04'],
            ['line' => 'ASHD05'],
            ['line' => 'ASHD06'],
            ['line' => 'ASHD07'],
            ['line' => 'ASHD09'],
            ['line' => 'ASHL01'],
            ['line' => 'ASHL02'],
            ['line' => 'ASHV01'],
            ['line' => 'ASIM01'],
            ['line' => 'ASIM02'],
            ['line' => 'ASIM03'],
            ['line' => 'ASIM04'],
            ['line' => 'ASIM05'],
            ['line' => 'ASOP01'],
            ['line' => 'ASPD01'],
            ['line' => 'ASRH01'],
            ['line' => 'ASST01'],
            ['line' => 'ASST02'],
            ['line' => 'ASST03'],
            ['line' => 'ASST04'],
            ['line' => 'ASWP01'],
            ['line' => 'ASWR01'],
            ['line' => 'ASWR02'],
            ['line' => 'BDDF01'],
            ['line' => 'BDDF02'],
            ['line' => 'BDDF03'],
            ['line' => 'BDDF04'],
            ['line' => 'BDST01'],
            ['line' => 'BDST02'],
            ['line' => 'BRST01'],
            ['line' => 'CCO001'],
            ['line' => 'COM001'],
            ['line' => 'COM002'],
            ['line' => 'DM0001'],
            ['line' => 'DS0001'],
            ['line' => 'ENG001'],
            ['line' => 'ENG002'],
            ['line' => 'ENG003'],
            ['line' => 'ENG004'],
            ['line' => 'ENG005'],
            ['line' => 'ENG006'],
            ['line' => 'ENG007'],
            ['line' => 'ENG008'],
            ['line' => 'FIN001'],
            ['line' => 'FIN002'],
            ['line' => 'GAF001'],
            ['line' => 'GAF002'],
            ['line' => 'GAF003'],
            ['line' => 'GIIH01'],
            ['line' => 'HRD001'],
            ['line' => 'HRD002'],
            ['line' => 'HRD003'],
            ['line' => 'HRD004'],
            ['line' => 'HRD005'],
            ['line' => 'HT001A'],
            ['line' => 'HT001B'],
            ['line' => 'HT002A'],
            ['line' => 'HT002B'],
            ['line' => 'HT003A'],
            ['line' => 'HTCD01'],
            ['line' => 'HTDS01'],
            ['line' => 'HTDS02'],
            ['line' => 'HTST01'],
            ['line' => 'HTST02'],
            ['line' => 'HTWR01'],
            ['line' => 'IA0001'],
            ['line' => 'IRL001'],
            ['line' => 'IRL002'],
            ['line' => 'KZN001'],
            ['line' => 'MADF01'],
            ['line' => 'MADL01'],
            ['line' => 'MADS01'],
            ['line' => 'MADS02'],
            ['line' => 'MADS03'],
            ['line' => 'MADS04'],
            ['line' => 'MAHC01'],
            ['line' => 'MAPR01'],
            ['line' => 'MFDF01'],
            ['line' => 'MGT001'],
            ['line' => 'MGT002'],
            ['line' => 'MGT003'],
            ['line' => 'MIS001'],
            ['line' => 'MKT001'],
            ['line' => 'MSU001'],
            ['line' => 'MSU002'],
            ['line' => 'MTE001'],
            ['line' => 'MTE002'],
            ['line' => 'MTE003'],
            ['line' => 'PC001A'],
            ['line' => 'PC001B'],
            ['line' => 'PC001C'],
            ['line' => 'PC001D'],
            ['line' => 'PC002A'],
            ['line' => 'PC002B'],
            ['line' => 'PC002C'],
            ['line' => 'PC002D'],
            ['line' => 'PC002E'],
            ['line' => 'PC002F'],
            ['line' => 'PC002G'],
            ['line' => 'PC002H'],
            ['line' => 'PC002I'],
            ['line' => 'PC002J'],
            ['line' => 'PC002K'],
            ['line' => 'PC002L'],
            ['line' => 'PC002M'],
            ['line' => 'PC002N'],
            ['line' => 'PC002O'],
            ['line' => 'PC002P'],
            ['line' => 'PC002Q'],
            ['line' => 'PC002R'],
            ['line' => 'PC002S'],
            ['line' => 'PC002T'],
            ['line' => 'PC002U'],
            ['line' => 'PC002V'],
            ['line' => 'PC002W'],
            ['line' => 'PC003A'],
            ['line' => 'PC003B'],
            ['line' => 'PC003C'],
            ['line' => 'PC003D'],
            ['line' => 'PC003E'],
            ['line' => 'PC003F'],
            ['line' => 'PC003G'],
            ['line' => 'PC003H'],
            ['line' => 'PC003I'],
            ['line' => 'PCO001'],
            ['line' => 'PK0001'],
            ['line' => 'PK0002'],
            ['line' => 'PK0003'],
            ['line' => 'PK0004'],
            ['line' => 'PK0005'],
            ['line' => 'PK004A'],
            ['line' => 'PK004C'],
            ['line' => 'PK004D'],
            ['line' => 'PK004E'],
            ['line' => 'PP0001'],
            ['line' => 'PP0002'],
            ['line' => 'PP0003'],
            ['line' => 'PP0004'],
            ['line' => 'PP0005'],
            ['line' => 'PP0006'],
            ['line' => 'PR001A'],
            ['line' => 'PR001B'],
            ['line' => 'PR002A'],
            ['line' => 'PR002B'],
            ['line' => 'PR002C'],
            ['line' => 'PR002D'],
            ['line' => 'PR002E'],
            ['line' => 'PR003A'],
            ['line' => 'PR003B'],
            ['line' => 'PR003C'],
            ['line' => 'PR003D'],
            ['line' => 'PR003E'],
            ['line' => 'PR004A'],
            ['line' => 'PR004B'],
            ['line' => 'PR004C'],
            ['line' => 'PR005A'],
            ['line' => 'PR006A'],
            ['line' => 'PR006B'],
            ['line' => 'PR006C'],
            ['line' => 'PR006D'],
            ['line' => 'PR006E'],
            ['line' => 'PR006F'],
            ['line' => 'PR006G'],
            ['line' => 'PR006H'],
            ['line' => 'PR006I'],
            ['line' => 'PR006J'],
            ['line' => 'PR006K'],
            ['line' => 'PR006L'],
            ['line' => 'PR006M'],
            ['line' => 'PR006N'],
            ['line' => 'PR006O'],
            ['line' => 'PR006P'],
            ['line' => 'PR006Q'],
            ['line' => 'PR007A'],
            ['line' => 'PR007B'],
            ['line' => 'PR007C'],
            ['line' => 'PR008A'],
            ['line' => 'PR008B'],
            ['line' => 'PR008C'],
            ['line' => 'PR008D'],
            ['line' => 'PR008E'],
            ['line' => 'PR009A'],
            ['line' => 'PR009B'],
            ['line' => 'PR009C'],
            ['line' => 'PR009D'],
            ['line' => 'PR009E'],
            ['line' => 'PR010A'],
            ['line' => 'PRDF01'],
            ['line' => 'PRDF02'],
            ['line' => 'PRDF03'],
            ['line' => 'PUR001'],
            ['line' => 'PUR002'],
            ['line' => 'PUR003'],
            ['line' => 'QA0001'],
            ['line' => 'QC0001'],
            ['line' => 'RFDF01'],
            ['line' => 'RFDF02'],
            ['line' => 'RFDF03'],
            ['line' => 'RFDF04'],
            ['line' => 'RFDF05'],
            ['line' => 'RFDF06'],
            ['line' => 'RND001'],
            ['line' => 'RND002'],
            ['line' => 'SACC01'],
            ['line' => 'SACC02'],
            ['line' => 'SACC03'],
            ['line' => 'SACC05'],
            ['line' => 'SACD01'],
            ['line' => 'SACD02'],
            ['line' => 'SACD03'],
            ['line' => 'SACD04'],
            ['line' => 'SACD05'],
            ['line' => 'SACD06'],
            ['line' => 'SACD07'],
            ['line' => 'SADF01'],
            ['line' => 'SADF02'],
            ['line' => 'SADF03'],
            ['line' => 'SADF04'],
            ['line' => 'SADF05'],
            ['line' => 'SADF06'],
            ['line' => 'SADF07'],
            ['line' => 'SADF08'],
            ['line' => 'SADF09'],
            ['line' => 'SADF10'],
            ['line' => 'SADL01'],
            ['line' => 'SADL02'],
            ['line' => 'SADL03'],
            ['line' => 'SADL04'],
            ['line' => 'SADL05'],
            ['line' => 'SADL06'],
            ['line' => 'SADL07'],
            ['line' => 'SADL08'],
            ['line' => 'SADL09'],
            ['line' => 'SADL10'],
            ['line' => 'SADL11'],
            ['line' => 'SADL12'],
            ['line' => 'SADL13'],
            ['line' => 'SADL14'],
            ['line' => 'SADL15'],
            ['line' => 'SADL16'],
            ['line' => 'SADL17'],
            ['line' => 'SADL18'],
            ['line' => 'SADL19'],
            ['line' => 'SADL20'],
            ['line' => 'SADL21'],
            ['line' => 'SAHV01'],
            ['line' => 'SAHV02'],
            ['line' => 'SAHV03'],
            ['line' => 'SBDF01'],
            ['line' => 'SBDF02'],
            ['line' => 'SBDF03'],
            ['line' => 'SBDF04'],
            ['line' => 'SBDF05'],
            ['line' => 'WASH01'],
            ['line' => 'WASH02'],
            ['line' => 'WDF13'],
            ['line' => 'WECR01'],
            ['line' => 'WECR02'],
            ['line' => 'WEDF01'],
            ['line' => 'WEDF02'],
            ['line' => 'WEDF03'],
            ['line' => 'WEDF04'],
            ['line' => 'WEDF05'],
            ['line' => 'WEDF06'],
            ['line' => 'WEDF07'],
            ['line' => 'WEDF08'],
            ['line' => 'WEDF09'],
            ['line' => 'WEDF09A'],
            ['line' => 'WEDF10'],
            ['line' => 'WEDF11'],
            ['line' => 'WEDF12'],
            ['line' => 'WEDF13'],
            ['line' => 'WEDF15'],
            ['line' => 'WEDH01'],
            ['line' => 'WEHL01'],
            ['line' => 'WEWR02'],
            ['line' => 'WEWR03'],
            ['line' => 'WEWR04'],
            ['line' => 'WEWR05'],
            ['line' => 'WEWR06'],
        ]);

        DB::table('mastersite')->insert([
            ['name' => 'Office Lantai 1',],
            ['name' => 'Office Lantai 2',],
            ['name' => 'Plant',],
            ['name' => 'Plant - Office',],
        ]);

        DB::table('masterstatus')->insert([
            ['status' => 'Active',],
            ['status' => 'Disposal',],
            ['status' => 'BV N/A',],
        ]);
        
        DB::table('masteruom')->insert([
            ['name' => 'Pcs', 'detail' => 'Pieces' ],
            ['name' => 'ea', 'detail' => 'Each' ],
            ['name' => 'Lot', 'detail' => 'Lot' ],
            ['name' => 'Unit', 'detail' => 'Unit' ],
        ]);
    }
}
