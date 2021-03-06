<?php

use craft\elements\Entry;
use craft\helpers\UrlHelper;

return [
    'endpoints' => [
		'eat/<slug:{slug}>.json' => function($slug) {
		    return [
				'elementType' => craft\elements\Entry::class,
		        'criteria' => [
		            'section' => 'eat',
		            'slug' => $slug
		        ],
		        'one' => true,
		        'transformer' => function(craft\elements\Entry $entry) {
					$photos = [];
		            foreach ($entry->mainPhoto as $photo) {
		                $photos = $photo->getUrl("eatMainImage");
		            }
		            return [
						"configuration" => [
					        "version" => "575",
					        "isDtmStaging" => false,
					        "loadJQuery" => false
					    ],
					    "isDevServer" => false,
					    "componentServiceOrigin" => "//justanswer.com/feapi",
					    "jsVariables" => "var JA=JA||{};JA.i=JA.i||{};JA.i.error=JA.i.error||{};JA.i.analytics=JA.i.analytics||{};JA.i.i18n=JA.i.i18n||{};JA.i.partner=JA.i.partner||{};JA.i.partner.Culture=JA.i.partner.Culture||{};JA.i.virtualAssistant=JA.i.virtualAssistant||{};JA.i.virtualAssistant.config=JA.i.virtualAssistant.config||{};JA.i.seo=JA.i.seo||{};JA.i.category=JA.i.category||{};JA.i.pt='132';JA.i.ptName='SeoTopicEAT';JA.i.pageViewName='SeoTopicEAT';JA.i.seo.injectedTopics='';JA.i.tp='na';JA.i.stp='na';JA.i.tpname='na';JA.i.pc='seo-topic-page';JA.i.v='567';JA.i.baseDomain='justanswer.com';JA.i.isDev=false;JA.i.isMobile=false;JA.i.serverName='c01';JA.i.error.max=0;JA.i.error.sendStack=true;JA.i.analytics.tracker='UA-2229500-1';JA.i.analytics.domain='.justanswer.com';JA.i.analytics.ignoredDomain='justanswer.com';JA.i.analytics.pagepath='/topics-furnace-installation/';JA.i.navInfo='init';JA.i.i18n.decDelim='.';JA.i.i18n.groupDelim=',';JA.i.i18n.groupSize='3';JA.i.i18n.ID_GeneralArg0Expert='General {0} Expert';JA.i.i18n.ID_General='General';JA.i.i18n.ID_Arg0Expert='{0} Expert';JA.i.i18n.ID_Expert='Expert';JA.i.partner.ID=1;JA.i.partner.Name='JA Root';JA.i.partner.DisplayName='JustAnswer';JA.i.partner.Culture.Name='en-US';JA.i.partner.Culture.LCID=1033;JA.i.partner.Type='JustAnswer';JA.i.partner.TypeAsInt=0;JA.i.contentForumSubName='HVAC';JA.i.contentPPCVerticalName='HI';JA.i.contentCategoryName='HVAC';JA.i.googleAnalyticsAccountId='UA-2229500-1';JA.i.GoogleAnalytics=JA.i.GoogleAnalytics||{};JA.i.GoogleAnalytics.PropertyId='UA-2229500-1';JA.i.forumId=95;JA.i.pageType='3O';JA.i.siteArea='LandingPages';JA.i.platform='Node FEAPI';JA.i.seo.isSeoPage=true;JA.i.seo.hasCustomContent=true;JA.i.seo.publishedOn='10.11.2016';JA.i.seo.header='How to Install a Furnace';JA.i.category.id=54753;JA.i.category.name='HVAC';JA.i.category.parentName='Home Improvement';JA.i.category.topLevelCategoryId=53906;JA.i.category.topLevelCategoryName='Home Improvement';JA.i.category.siloName='HVAC';JA.i.category.siloVerticalName='Home Improvement';JA.i.category.ppcVerticalName='HI';JA.i.category.forumSubName='HVAC';JA.i.AddThis=JA.i.AddThis||{};JA.i.AddThis.PubId='tkjustanswer';JA.i.AddThis.WidgetUrl='//s7.addthis.com/js/300/addthis_widget.js';JA.i.AddThis.WidgetUILanguage='en';",
					    "fontsBase" => "//ww2.justanswer.com/static/tests/rds/",
					    "fontsUrlHash" => "eat_569",
					    "imagesBase" => "//ww2.justanswer.com/static/tests/rds/",
					    "partner" => [
					        "baseDomain" => "www.justanswer.com"
					    ],
					    "faviconUrl" => "//www.justanswer.com/favicon-new.ico",
					    "touchIconUrl" => "//www.justanswer.com/img/ja-boxlogo.png",
					    "labels" => [
					        "common" => [
					            "copyright" => "2003-2016 JustAnswer LLC",
					            "category" => "Category",
					            "expert" => "Expert",
					            "customer" => "Customer"
					        ]
					    ],
					    "metadata" => [
					        "description" => "If you want to save time and money, it's fairly straightforward to install a furnace yourself. Hereâ€™s a step-by-step DIY furnace installation guide from verified HVAC Experts on JustAnswer.",
					        "title" => "How to install a furnace - A step-by-step guide",
					        "metadataTitle" => "How to Install a Furnace, Made Easy",
					        "keywords" => "install furnace, dirty furnace filter, air filter",
					        "robots" => "INDEX,FOLLOW",
					        "openGraph" => [
					            "image" => "//ww2.justanswer.com/static/eat/topics-furnace-installation/topics-furnace-installation-og.jpg",
					            "height" => "630",
					            "width" => "1200",
					            "title" => "How to install a furnace - A step-by-step guide",
					            "description" => "Want to save time and money by installing your furnace yourself? Hereâ€™s a step-by-step DIY furnace installation guide from verified HVAC Experts on JustAnswer.",
					            "locale" => "en_US",
					            "section" => "HVAC",
					            "publishedOn" => "2016-11-10",
					            "siteName" => "JustAnswer"
					        ],
					        "twitter" => [
					            "description" => "Want to save time and money by installing your furnace yourself? Hereâ€™s a step-by-step DIY furnace installation guide from verified HVAC Experts on JustAnswer.",
					            "title" => "How to install a furnace - A step-by-step guide",
					            "image" => "//ww2.justanswer.com/static/eat/topics-furnace-installation/topics-furnace-installation-og.jpg",
					            "cardType" => "Summary_large_image"
					        ]
					    ],
					    "category" => [
					        "url" => "/hvac/",
					        "name" => "HVAC",
					        "expertNameSingular" => "HVAC Technician",
					        "expertNamePlural" => "HVAC Technicians",
					        "articleExpertNameSingular" => "an",
					        "expertsOnlineCount" => "32",
					        "categoryId" => "54753",
					        "isSilo" => true,
					        "isSiloVertical" => false,
					        "forumId" => "95"
					    ],
					    "utilityBar" => [
					        "links" => [[
					                "url" => "/login",
					                "title" => "Login"
					            ],
					            [
					                "url" => "//ww2.justanswer.com/help",
					                "title" => "Contact us"
					            ]
					        ]
					    ],
					    "header" => [
					        "category" => "HVAC",
					        "tagline" => "Connect one-on-one with an HVAC Technician who will answer your question",
					        "mobileTagLine" => "Connect one-on-one with an HVAC Technician",
					        "breadcrumbs" => [[
					                "url" => "/",
					                "title" => "Ask an Expert"
					            ],
					            [
					                "url" => "/home-improvement/",
					                "title" => "Home Improvement Questions"
					            ],
					            [
					                "url" => "/hvac/",
					                "title" => "HVAC Questions"
					            ]
					        ]
					    ],
					    "navigation" => [
					        "items" => [[
					                "title" => "Explore related questions",
					                "mobileTitle" => "Related"
					            ],
					            [
					                "title" => "Find Experts",
					                "mobileTitle" => "Experts"
					            ],
					            [
					                "title" => "About"
					            ]
					        ]
					    ],
					    "socialSharing" => [
					        "source" => "//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5823e9defea3df7c",
					        "loadRetryInterval" => "200",
					        "verticalOffsetTrigger" => "150"
					    ],
					    "content" => [
					        "title" => $entry->title,
					        "keyword" => "furnace installation",
					        "urlSlug" => "furnace-installation",
					        "image" => $photos,
					        "imageAlt" => "An HVAC technician works to install a furnace",
					        "viewsNumber" => "1K",
					        "contentHTML" => $entry->eatArticleBody
					    ],
					    "author" => [
					        "image" => "//ww2.justanswer.com/static/experts/expert-neal-j.jpg",
					        "name" => "Neal J",
					        "title" => "Former HVAC Service Technician",
					        "major" => "Residential HVAC",
					        "reviewsCount" => "75",
					        "positiveReviewsLabel" => "positive ratings",
					        "rating" => "5"
					    ],
					    "expertBulletList" => [
					        "color" => "color-blue",
					        "title" => "Types of furnaces",
					        "content" => "<p>There are three main types of furnaces: gas, electric, and oil. Cost and size of home will dictate which you use.</p>"
					    ],
					    "tags" => [[
					            "title" => "Furnace Blowing Cold Air",
					            "url" => "/topics-furnace-blowing-cold-air/"
					        ],
					        [
					            "title" => "Blower Not Working",
					            "url" => "/topics-furnace-blower/"
					        ],
					        [
					            "title" => "Furnace Leaking Water",
					            "url" => "/topics-furnace-leaking-water/"
					        ],
					        [
					            "title" => "Unit Heater",
					            "url" => "/topics-unit-heater/"
					        ],
					        [
					            "title" => "Underfloor Heating",
					            "url" => "/topics-underfloor-heating/"
					        ],
					        [
					            "title" => "Space Heater",
					            "url" => "/topics-space-heater/"
					        ],
					        [
					            "title" => "Solar Heater",
					            "url" => "/topics-solar-heater/"
					        ],
					        [
					            "title" => "Heat Pump",
					            "url" => "/topics-heat-pump/"
					        ],
					        [
					            "title" => "Air Conditioner",
					            "url" => "/topics-air-conditioner/"
					        ],
					        [
					            "title" => "Air Vent Problems",
					            "url" => "/topics-air-vent/"
					        ],
					        [
					            "title" => "Air Filter",
					            "url" => "/topics-air-filter/"
					        ]
					    ],
					    "relatedArticles" => [
					        "title" => "HVAC articles",
					        "articles" => [[
					                "url" => "/topics-furnace-pilot-light/",
					                "title" => "How to Light a Pilot Light",
					                "image" => "//ww2.justanswer.com/static/eat/topics-furnace-pilot-light/topics-furnace-pilot-light-t.jpg"
					            ],
					            [
					                "image" => "//ww2.justanswer.com/static/eat/topics-change-furnace-filter/topics-change-furnace-filter-t.jpg",
					                "url" => "/topics-change-furnace-filter/",
					                "title" => "How to Change a Furnace Filter"
					            ],
					            [
					                "image" => "//ww2.justanswer.com/static/eat/topics-furnace-filter/topics-furnace-filter-t.jpg",
					                "url" => "/topics-furnace-filter/",
					                "title" => "Furnace Filter"
					            ]
					        ]
					    ],
					    "trendingTopics" => [
					        "title" => "Trending Topics",
					        "links" => [[
					                "title" => "Furnace Problems and Troubleshooting",
					                "url" => "/topics-furnace/",
					                "image" => "//ww2.justanswer.com/static/eat/topics-furnace/topics-furnace-t.jpg"
					            ],
					            [
					                "title" => "Gas Furnace Related Questions",
					                "url" => "/topics-gas-furnace/",
					                "image" => "//ww2.justanswer.com/static/eat/topics-gas-furnace/topics-gas-furnace-t.jpg"
					            ],
					            [
					                "title" => "What is a Thermostat?",
					                "url" => "/topics-thermostat-hvac/",
					                "image" => "//ww2.justanswer.com/static/eat/topics-thermostat-hvac/topics-thermostat-hvac-t.jpg"
					            ],
					            [
					                "title" => "See more trending topics",
					                "url" => "/hvac/topics.html"
					            ]
					        ]
					    ],
					    "moreFromJustAnswer" => [
					        "title" => "More from JustAnswer",
					        "links" => [[
					                "url" => "/topics-furnace/questions.html",
					                "title" => "Furnace related questions"
					            ],
					            [
					                "url" => "/hvac/questions.html",
					                "title" => "HVAC related questions"
					            ],
					            [
					                "url" => "/hvac/experts.html",
					                "title" => "HVAC Experts"
					            ],
					            [
					                "url" => "/hvac/monthly-archives.html",
					                "title" => "HVAC questions archives"
					            ],
					            [
					                "url" => "/home-improvement/questions.html",
					                "title" => "Home Improvement related questions"
					            ],
					            [
					                "url" => "/home-improvement/experts.html",
					                "title" => "Home Improvement Experts"
					            ],
					            [
					                "url" => "/home-improvement/monthly-archives.html",
					                "title" => "Home Improvement questions archives"
					            ]
					        ]
					    ],
					    "testimonials" => [[
					            "text" => "My dead furnace was up and running in an hour! My furnace stopped working on a cold winter day. [â€¦]My technician led me through troubleshooting the problem and we narrowed it down to a bad thermostat. It was a great experience and saved me a lot of money!",
					            "author" => [
					                "name" => "Joe A."
					            ],
					            "rating" => "5"
					        ],
					        [
					            "text" => "I've used \"JustAnswer\" on two separate occasions now. Both times, the responses I received were quick, concise, and correct. [...] I would definitely use JustAnswer again, and would recommend it to anyone who is a semi-do-it-yourselfer.",
					            "author" => [
					                "name" => "Michael F."
					            ],
					            "rating" => "5"
					        ],
					        [
					            "text" => "I was very impressed with Billy, the HVAC tech I was connected to [...] Got a great answer and the response time and charge for the service were very reasonable.",
					            "author" => [
					                "name" => "S. B."
					            ],
					            "rating" => "5"
					        ]
					    ],
					    "aboutTestimonials" => [[
					            "text" => "My dead furnace was up and running in an hour! My furnace stopped working on a cold winter day. [â€¦]My technician led me through troubleshooting the problem and we narrowed it down to a bad thermostat. It was a great experience and saved me a lot of money!",
					            "author" => [
					                "name" => "Joe A."
					            ],
					            "rating" => "5"
					        ],
					        [
					            "text" => "I've used \"JustAnswer\" on two separate occasions now. Both times, the responses I received were quick, concise, and correct. [...] I would definitely use JustAnswer again, and would recommend it to anyone who is a semi-do-it-yourselfer.",
					            "author" => [
					                "name" => "Michael F."
					            ],
					            "rating" => "5"
					        ],
					        [
					            "text" => "I was very impressed with Billy, the HVAC tech I was connected to [...] Got a great answer and the response time and charge for the service were very reasonable.",
					            "author" => [
					                "name" => "S. B."
					            ],
					            "rating" => "5"
					        ]
					    ],
					    "relatedQuestionsTitle" => "Related questions",
					    "reviewsLabel" => "satisfied customers",
					    "relatedQuestions" => [[
					            "url" => "//www.justanswer.com/hvac/1v9zy-put-regular-home-furnace-mobile-home.html",
					            "title" => "Can a \"regular home\" furnace be installed in a mobile home?",
					            "text" => "Yes, you can install a \"regular home furnace\" in a mobile home but there are some things you need to take into consideration. The spot where you install the furnace needs to have sufficient air for combustion & proper clearance to combustibles (walls, ceiling and floor) this will depend on the model you choose. You also need to be aware of venting requirements. If you have limited space and plan on putting your furnace in a confined area then a furnace that draws combustion air from outside will probably work best. I should also mention that some units are designated, as \"not for use in a mobile home\" so of course these units would not be suitable.",
					            "expert" => [
					                "image" => "//www.justanswer.com/uploads/RI/RicoSoma/2013-8-24_144956_JAProfilepic1.64x64.JPG",
					                "name" => "Rick",
					                "url" => "//www.justanswer.com/home-improvement/expert-rickthecontractor/",
					                "title" => "HVAC Supervisor",
					                "major" => "Construction Super, Master Plumber",
					                "reviewsCount" => "19,273",
					                "rating" => "5"
					            ]
					        ],
					        [
					            "url" => "//www.justanswer.com/hvac/7gnb8-hope-someone-help-keeprite-c9mpd075f12a2-upflow-installation.html",
					            "title" => "Need help with Keeprite C9MPD075F12A2 upflow installation.",
					            "text" => "I hope someone can help Keeprite C9MPD075F12A2 upflow installation sounds like it is full of water. I replaced the drain line from the exhaust as well as the drain from secondary HX Assembly. I blew the lines and none seem plugged yet very little water drains from the HX assembly line. I do see some from the vent line drain. Sounds like condensation is getting in the fan blade area(???). Thanks in advance.",
					            "expert" => [
					                "image" => "//www.justanswer.com/uploads/GU/gurutech67/040.64x64.JPG",
					                "name" => "Scott",
					                "url" => "//www.justanswer.com/home-improvement/expert-ssaladine/",
					                "title" => "Self Employed HVAC Service Technician",
					                "major" => "Associate Degree",
					                "reviewsCount" => "398",
					                "rating" => "5"
					            ]
					        ],
					        [
					            "url" => "//www.justanswer.com/hvac/5z07t-figure-size-cfm-furnace-need-install.html",
					            "title" => "How to wire line to shut off switch & solenoid to furnace wiring?",
					            "text" => "I have a new furnace I am hooking up. All power is shut off. It has wiring already run from the circuit breaker box. It has a solenoid attached to the switch box run with low voltage wiring from the thermostat upstairs and back to the control circuit board on the furnace. How do I connect the wiring from the line to the single shut off switch and the solenoid back to the wiring from the furnace. Thank You.",
					            "expert" => [
					                "image" => "//ww2.justanswer.com/static/tests/rds/experts/expert-tom-b.jpg",
					                "name" => "Tom",
					                "url" => "//www.justanswer.com/home-improvement/expert-tom-b/",
					                "title" => "HVAC Technician",
					                "major" => "HVAC / Refrigeration/ Steam, hydronics",
					                "reviewsCount" => "770",
					                "rating" => "5"
					            ]
					        ],
					        [
					            "url" => "//www.justanswer.com/hvac/445ql-install-igniter-lennox-pulse-furnace.html",
					            "title" => "How to install an igniter in a Lennox Pulse furnace?",
					            "text" => "If it is the pulse, which the 21 suggests, then yes it's a spark plug. On the left side, just about even with the flapper valve, there is an access door. This door leads to the spark plug. Again, there is a special tool to get it out, but you can wrestle with regular tools. It is a complicated at best job so rather than poke our way through it, I am sending you the service manual via a link. Open or print the document and look at pages 27/28 to see the spark plug. Earlier in the manual, it shows you the access door.",
					            "expert" => [
					                "image" => "//www.justanswer.com/uploads/HV/HVACDoug/douglas.200x200.jpg",
					                "name" => "Douglas",
					                "url" => "//www.justanswer.com/home-improvement/expert-douglas/",
					                "title" => "HVAC Technician",
					                "major" => "Manufacture Rep for Major Brand, Technical Trainer, NATE",
					                "reviewsCount" => "3,089",
					                "rating" => "5"
					            ]
					        ],
					        [
					            "url" => "//www.justanswer.com/hvac/26gia-hi-i-m-installing-goodman-furnace-ac-unit-top.html",
					            "title" => "Need help installing Goodman furnace.",
					            "text" => "I'm installing a Goodman furnace/ AC unit.. The top of the furnace has guides for the coil. My coil came with the furnace as a set but the receiver guides at the base of the coil are too far apart and to short for the furnace guides. 3 of the guides on the furnace are removeable. Does this seem the correct option? The furnace and all parts are matched by Goodman and they say they are the correct ones.",
					            "expert" => [
					                "image" => "//www.justanswer.com/uploads/skibum0101/2008-12-16_015819_just_answer.jpg",
					                "name" => "Rick Mather",
					                "url" => "//www.justanswer.com/home-improvement/expert-rickmather/",
					                "title" => "HVAC Tech",
					                "major" => "Contractor HVAC, Building Trade",
					                "reviewsCount" => "3,631",
					                "rating" => "5"
					            ]
					        ],
					        [
					            "url" => "//www.justanswer.com/hvac/5zh0b-goodman-mbr-aa1200-new-furnace-install-place.html",
					            "title" => "Installing Goodman furnace. Should I turn it upside down?",
					            "text" => "We have a Goodman MBR-AA1200 new furnace to install in place of our old oil furnace. The instructions are not very clear for a counter-flow installation (The supply ducts are in the crawl space under the house and return air is in the roof space. Installation instructions do not specifically say to turn the furnace upside down). It appears we need to turn this particular furnace upside down for it to blow through the underfloor ducts. Is this true? Thank you in advance. Bob",
					            "expert" => [
					                "image" => "//www.justanswer.com/uploads/AI/airheatman/2013-7-7_172444_RuudUnits.64x64.jpg",
					                "name" => "Airheatman",
					                "url" => "//www.justanswer.com/home-improvement/expert-airheatman/",
					                "title" => "Heating & Air Conditioning Contractor",
					                "major" => "General",
					                "reviewsCount" => "5,680",
					                "rating" => "5"
					            ]
					        ]
					    ],
					    "expertsList" => [
					        "title" => "8 verified HVAC Technicians are online now",
					        "description" => "HVAC Technicians on JustAnswer are verified through an extensive 8-step process including screening of licenses, certifications, education and/or employment.",
					        "learnMore" => [
					            "title" => "Learn more",
					            "url" => "//ww2.justanswer.com/expert-quality-process"
					        ],
					        "seeAll" => [
					            "title" => "See all HVAC technicians",
					            "url" => "/hvac/experts.html"
					        ],
					        "experts" => [[
					                "image" => "//www.justanswer.com/uploads/AL/alumalite/2012-5-10_234018_shutterstock506249951forJA500.200x200.jpg",
					                "name" => "Phil",
					                "url" => "//www.justanswer.com/home-improvement/expert-phil-2/",
					                "title" => "Consultant to Engrs, Govt & Contractors",
					                "major" => "HVAC, Ind. Reflg. Controls",
					                "reviewsCount" => "7,553",
					                "isOnline" => "true",
					                "rating" => "5"
					            ],
					            [
					                "image" => "//www.justanswer.com/uploads/RY/Rygis20/2011-5-7_3143_DSC5324.200x200.JPG",
					                "name" => "Matthew",
					                "url" => "//www.justanswer.com/home-improvement/expert-matthew/",
					                "title" => "HVAC Technician",
					                "major" => "Conditioned Air",
					                "reviewsCount" => "2,014",
					                "isOnline" => "true",
					                "rating" => "5"
					            ],
					            [
					                "image" => "//ww2.justanswer.com/static/tests/rds/experts/expert-tom-b.jpg",
					                "name" => "Tom",
					                "url" => "//www.justanswer.com/home-improvement/expert-tom-b/",
					                "title" => "HVAC Technician",
					                "major" => "Journeyman HVAC",
					                "reviewsCount" => "770",
					                "isOnline" => "",
					                "rating" => "5"
					            ]
					        ]
					    ],
					    "expertProfileLabels" => [
					        "onlineNow" => "Online now",
					        "satisfiedCustomers" => "satisfied customers",
					        "verifiedExpert" => "Verified Expert",
					        "about" => "About",
					        "experience" => "Experience"
					    ],
					    "expertProfile" => [
					        "image" => "//ww2.justanswer.com/static/tests/rds/experts/expert-neal-j.jpg",
					        "name" => "Neal J",
					        "satisfiedCustomersNumber" => "75",
					        "headline" => "Former HVAC Service Technician",
					        "experience" => "I am a former service and installation technician with 13 years of residential service and installation experience, in addition to being an HVAC contractor for the last 7 years. Before I worked in the HVAC field, I was an Aircraft Technician for 15 years with the USAF and Northwest Airlines.",
					        "about" => [[
					                "title" => "Current job title",
					                "value" => "Former HVAC Service Technician"
					            ],
					            [
					                "title" => "Major or emphasis",
					                "value" => "Residential HVAC"
					            ],
					            [
					                "title" => "Professional licenses",
					                "value" => "Vocational, Technical or Trade School"
					            ]
					        ],
					        "tags" => [[
					            "title" => "HVAC",
					            "url" => "/hvac/"
					        ]]
					    ],
					    "questionBox" => [
					        "title" => "Ask Neal J your own question",
					        "placeholder" => "Type your question here",
					        "buttonText" => "Get an answer",
					        "forumId" => "95",
					        "actionUrl" => "/gadget-landing.aspx?ilpe=Node FEAPI"
					    ],
					    "mobileQuestionBox" => [
					        "title" => "Ask <span class=\"expert-profile-trigger\">Neal J</span> your own question",
					        "placeholder" => "Type your question here",
					        "buttonText" => "Get an Answer",
					        "forumId" => "95",
					        "actionUrl" => "/gadget-landing.aspx?ilpe=Node FEAPI"
					    ],
					    "footer" => [
					        "articles" => [[
					                "title" => "How to stay warm and save money",
					                "url" => "//blog.justanswer.com/how-stay-warm-and-save-money",
					                "author" => [
					                    "name" => "Robyn",
					                    "image" => "//blog.justanswer.com/sites/blog.justanswer.com/files/G%2B_PROFILE_PICTURE_02.png"
					                ],
					                "date" => "November 11, 2015"
					            ],
					            [
					                "title" => "Winterizing your home the right way",
					                "url" => "//blog.justanswer.com/winterizing-your-home-right-way",
					                "author" => [
					                    "name" => "Carolyn Hauck",
					                    "image" => "//ww2.justanswer.com/static/tests/rds/th-footer/images/carolyn--30x30.jpg"
					                ],
					                "date" => "December 18, 2014"
					            ],
					            [
					                "title" => "Will winterizing lower my heating bills?",
					                "url" => "//blog.justanswer.com/will-winterizing-lower-my-heating-bills",
					                "author" => [
					                    "name" => "Jessica Klimczak",
					                    "image" => "//ww2.justanswer.com/static/tests/rds/th-footer/images/jessica--30x30.jpg"
					                ],
					                "date" => "December 10, 2013"
					            ]
					        ],
					        "categories" => [[
					                "url" => "/medical",
					                "title" => "Medical Questions"
					            ],
					            [
					                "url" => "/law",
					                "title" => "Ask a Lawyer"
					            ],
					            [
					                "url" => "/car",
					                "title" => "Car Questions"
					            ],
					            [
					                "url" => "/veterinary",
					                "title" => "Ask a Vet"
					            ],
					            [
					                "url" => "/home-improvement",
					                "title" => "Home Improvement Questions"
					            ]
					        ],
					        "partners" => [[
					                "url" => "//www.justanswer.co.uk/",
					                "title" => "JustAnswer UK"
					            ],
					            [
					                "url" => "//www.justanswer.de/",
					                "title" => "JustAnswer Germany"
					            ],
					            [
					                "url" => "//www.justanswer.es/",
					                "title" => "JustAnswer Spain"
					            ],
					            [
					                "url" => "//www.justanswer.jp/",
					                "title" => "JustAnswer Japan"
					            ]
					        ]
					    ]
		            ];
		        },
		    ];
		},
    ]
];
