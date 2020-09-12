<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Modules extends Seeder
{
	public function run()
	{
		$data = [
			[
				[
					'name' => 'Programming Foundations : Fundamentals',
					'link' => 'https://www.linkedin.com/learning/programming-foundations-fundamentals-3?trk=li-softwaredev-programfundamentals-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Prepare to learn the fundamental concepts, practices, and terminology of programming.',
				],

				[
					'name' => 'Programming Foundations : Databases',
					'link' => 'https://www.linkedin.com/learning/programming-foundations-databases-2?trk=li-softwaredev-programdatabases-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Find out how to build a database, define relationships, and write queries.',
				],

				[
					'name' => 'Succeeding in Web Development: Full Stack and Front End',
					'link' => 'https://www.linkedin.com/learning/succeeding-in-web-development-full-stack-and-front-end?trk=li-softwaredev-webdev-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn about the skills you need to get a job as a front-end, back-end, or full-stack web developer.',
				],

				[
					'name' => 'HTML Essential Training',
					'link' => 'https://www.linkedin.com/learning/html-essential-training-4?trk=li-softwaredev-html-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how to write HTML, the programming language that powers the web.

					',
				],

				[
					'name' => 'CSS Essential Training',
					'link' => 'https://www.linkedin.com/learning/css-essential-training-3?trk=li-softwaredev-css-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how to select content, style text, manage layouts, and more as you work on a real-world project.',
				],

				[
					'name' => 'JavaScript Essential Training',
					'link' => 'https://www.linkedin.com/learning/javascript-essential-training-3?trk=li-softwaredev-javascript-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how to work with objects, variables, data types, conditionals, functions, loops, closures, the DOM, ES6, and more.',
				],

				[
					'name' => 'Learning Python',
					'link' => 'https://www.linkedin.com/learning/learning-python-2?trk=li-softwaredev-python-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Get started with Python, the popular and highly readable object-oriented language.',
				],

				[
					'name' => 'Learning SQL Programming',
					'link' => 'https://www.linkedin.com/learning/learning-sql-programming?trk=li-softwaredev-sql-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn the basics of SQL, the programming language for retrieving and editing data from databases such as SQL Server and MySQL.',
				],
			],
			[
				[
					'name' => 'Cert Prep 1: Understanding Networks',
					'link' => 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-1-understanding-networks?trk=li-itadmin-cert1-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Part 1 of our 9-part training series covers networking basics: OSI versus TCP/IP models, MAC and IP addressing, and packets and ports.',
				],

				[
					'name' => 'Cert Prep 2: The Physical Network',
					'link' => 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-2-the-physical-network?trk=li-itadmin-cert2-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Prepare for questions on physical network components such as cabling, Ethernet, and switches.',
				],

				[
					'name' => 'Cert Prep 3: The World of TCP/IP',
					'link' => 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-3-the-world-of-tcp-ip?trk=li-itadmin-cert3-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'This cert prep course covers TCP/IP basics, including IP addressing, subnetting, port forwarding, and routing.',
				],

				[
					'name' => 'Cert Prep 4: Making TCP/IP Work',
					'link' => 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-4-making-tcp-ip-work?trk=li-itadmin-cert4-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Review key networking exam concepts as you learn about TCP/IP applications and network naming.',
				],

				[
					'name' => 'Cert Prep 5: Securing TCP/IP',
					'link' => 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-5-securing-tcp-ip?trk=li-itadmin-cert5-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Review key network security exam concepts as you learn how to secure TCP/IP.',
				],

				[
					'name' => 'Cert Prep 6: Advanced IP Networking',
					'link' => 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-5-securing-tcp-ip?trk=li-itadmin-cert5-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Review networking and infrastructure concepts as you learn about advanced networking devices, IPv6, and remote connectivity.',
				],

				[
					'name' => 'Cert Prep 7: Wireless, Cloud, and Mobile Networking',
					'link' => 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-7-wireless-virtual-cloud-and-mobile-networking?trk=li-itadmin-cert7-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Review networking and infrastructure concepts as you learn about wireless, cloud, virtual, and mobile networking.',
				],

				[
					'name' => 'Cert Prep 8: Building a Real-World Network',
					'link' => 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-8-building-a-real-world-network?trk=li-itadmin-cert8-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Review key networking exam concepts as you learn how to design and build a real-world network.',
				],
			],
			[
				[
					'name' => 'Customer Service Foundations',
					'link' => 'https://www.linkedin.com/learning/comptia-network-plus-n10-007-cert-prep-8-building-a-real-world-network?trk=li-itadmin-cert8-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Make your customers feel valued. Learn practical techniques for delivering outstanding customer service and increasing customer loyalty.',
				],

				[
					'name' => 'Customer Service: Problem Solving and Troubleshooting',
					'link' => 'https://www.linkedin.com/learning/customer-service-problem-solving-and-troubleshooting?trk=li-customerservice-probsolving-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn critical problem-solving and troubleshooting processes for common sense customer service in a wide variety of applications.',
				],

				[
					'name' => 'Building Rapport with Customers',
					'link' => 'https://www.linkedin.com/learning/building-rapport-with-customers?trk=li-customerservice-rapport-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Forge a human connection with your customers. Learn how to establish rapport within the first few seconds of a customer service interaction.',
				],

				[
					'name' => 'Customer Service: Call Control Strategies',
					'link' => 'https://www.linkedin.com/learning/customer-service-call-control-strategies?trk=li-customerservice-callcontrol-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Get tips for communicating on the phone with upset customers. Discover time-saving call-control strategies to move customer issues to resolution.',
				],

				[
					'name' => 'Customer Service: Handling Abusive Customers',
					'link' => 'https://www.linkedin.com/learning/customer-service-handling-abusive-customers?trk=li-customerservice-abcustomer-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn strategies and techniques for handling abusive customers. Discover how to diffuse and refocus negative customer service interactions.',
				],

				[
					'name' => 'Positive Conversations with Challenging Customers',
					'link' => 'https://www.linkedin.com/learning/creating-positive-conversations-with-challenging-customers?trk=li-customerservice-positiveconvo-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => "Learn how to put a positive slant on a negative situation, and leave your customers feeling heard and valued.",
				],

				[
					'name' => 'De-Escalating Intense Situations',
					'link' => 'https://www.linkedin.com/learning/de-escalating-intense-situations?trk=li-customerservice-deescalate-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => "Successfully defuse intense situations with angry customers. Learn practical approaches for managing a customer's frustration, as well as your own.",
				],

				[
					'name' => 'Customer Service: Serve Customers Through Chat and Text',
					'link' => 'https://www.linkedin.com/learning/customer-service-serving-customers-through-chat-and-text?trk=li-customerservice-chat-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Provide top-notch customer service in the channels people love to use. Develop your chat and text writing skills to handle live, rapid-fire conversations.',
				],
			],
			[
				[
					'name' => 'Prepare Yourself for a Career in Sales',
					'link' => 'https://www.linkedin.com/learning/prepare-yourself-for-a-career-in-sales-2?trk=li-salesrep-prepare-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how to develop yourself and build more effective relationships with both your teammates and your customers.',
				],

				[
					'name' => 'Sales Foundations',
					'link' => 'https://www.linkedin.com/learning/sales-foundations?trk=li-salesrep-foundations-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Find out what makes salespeople effective, and learn specific strategies for prospecting and product positioning and developing a sales process.',
				],

				[
					'name' => 'Asking Great Sales Questions',
					'link' => 'https://www.linkedin.com/learning/asking-great-sales-questions-5?trk=li-salesrep-salesqa-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how to ask sales questions that lead to high-quality interactions with customers and clients.',
				],

				[
					'name' => 'Soft Skills for Sales Professionals',
					'link' => 'https://www.linkedin.com/learning/soft-skills-for-sales-professionals?trk=li-salesrep-softskills-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how to build your soft sales skills to better connect with—and ultimately sell to—your customers.',
				],

				[
					'name' => 'Sales: Handling Objections',
					'link' => 'https://www.linkedin.com/learning/sales-handling-objections?trk=li-salesrep-objections-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how to confidently handle objections that can crop up throughout the sales process.',
				],

				[
					'name' => 'Sales Negotiation',
					'link' => 'https://www.linkedin.com/learning/sales-negotiation?trk=li-salesrep-negotiation-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Discover what makes sales negotiations different and how to negotiate deals that stick.',
				],

				[
					'name' => 'Sales: Closing Strategies',
					'link' => 'https://www.linkedin.com/learning/sales-negotiation?trk=li-salesrep-negotiation-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Develop an effective closing strategy. Get tips to recognize buying signals and close more sales.',
				],

				[
					'name' => 'Selling with Stories: Stories Great Sales People Tell',
					'link' => 'https://www.linkedin.com/learning/selling-with-stories-part-2-stories-great-sales-people-tell?trk=li-salesrep-stories-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn the 25 most essential types of sales stories to earn buyer trust and make the sale.',
				],
			],
			[
				[
					'name' => 'Learning Data Analytics',
					'link' => 'https://www.linkedin.com/learning/learning-data-analytics-2?trk=li-data-dataanalytics-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn the basics of data analytics: using data for analysis and reporting. This beginner-level data science course is for anyone who works with data.',
				],

				[
					'name' => 'Data Fluency: Exploring and Describing Data',
					'link' => 'https://www.linkedin.com/learning/data-fluency-exploring-and-describing-data?trk=li-data-datafluency-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how anyone can speak the language of data analysis. Find out how to prepare data, explore it visually, and describe it using statistical methods.',
				],

				[
					'name' => 'Excel Statistics Essential Training: 1',
					'link' => 'https://www.linkedin.com/learning/excel-statistics-essential-training-1-2?trk=li-data-excelstatistics-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn statistics. Dr. Joseph Schmuller uses Microsoft Excel to teach the fundamentals of descriptive and inferential statistics.',
				],

				[
					'name' => 'Learning Excel: Data-Analysis',
					'link' => 'https://www.linkedin.com/learning/learning-excel-data-analysis-2?trk=li-data-learnexcel-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => "Unlock the power of your organization's data. Learn how to perform data analysis in Microsoft Excel.",
				],

				[
					'name' => 'Learning Data Visualization',
					'link' => 'https://www.linkedin.com/learning/learning-data-visualization-3?trk=li-data-datavisual-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Communicate complex ideas quickly and thoroughly with data visualization. Turn information into artwork and intrigue your audience.',
				],

				[
					'name' => 'Power BI Essential Training',
					'link' => 'https://www.linkedin.com/learning/power-bi-essential-training-3?trk=li-data-powerbi-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how to use this powerful set of business analytics tools to create and share visualizations with others in your organization',
				],

				[
					'name' => 'Tableau Essential Training (2020.1)',
					'link' => 'https://www.linkedin.com/learning/tableau-essential-training-2020-1?trk=li-data-tableau-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Discover how to leverage the software to make smarter, more data-driven decisions.',
				],
			],
			[
				[
					'name' => 'Cert Prep 1: The Basics',
					'link' => 'https://www.linkedin.com/learning/tableau-essential-training-2020-1?trk=li-data-tableau-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Earn your CompTIA A+ certification. Study topics from the Core 1 (220-1001) exam, including hardware basics and best practices for safety, communication, and professionalism.',
				],

				[
					'name' => 'Cert Prep 2: Microprocessing and RAM',
					'link' => 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-2-microprocessing-and-ram?trk=li-itsupport-certprep2-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn all about CPUs, RAM technologies and features, and installing both a CPU and RAM.',
				],

				[
					'name' => 'Cert Prep 3: Core Hardware',
					'link' => 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-3-core-hardware?trk=li-itsupport-certprep3-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn about essential hardware components, devices, and processes.',
				],

				[
					'name' => 'Cert Prep 4: Storage and Peripherals',
					'link' => 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-4-storage-and-peripherals?trk=li-itsupport-certprep4-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Learn how to install and configure essential storage and peripheral devices as you prepare to take and pass the CompTIA A+ Core 1 (220-1001) exam.',
				],

				[
					'name' => 'Cert Prep 5: Display Technologies',
					'link' => 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-5-display-technologies?trk=li-itsupport-certprep5-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Prepare for the CompTIA A+ Core 1 (220-1001) exam. Study exam topics related to display technologies such as monitors, graphics cards, and projectors.',
				],

				[
					'name' => 'Cert Prep 6: Physical Networking',
					'link' => 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-6-physical-networking?trk=li-itsupport-certprep6-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Prepare for the CompTIA A+ Core 1 (220-1001) exam by reviewing the basics of networking: LANs and WANs, hubs and switches, and cables and connectors.',
				],

				[
					'name' => 'Cert Prep 7: Understanding Networking',
					'link' => 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-7-understanding-networking?trk=li-itsupport-certprep7-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Review essential wireless networking concepts—like DNS, configuring routers—as you prepare to take and pass the CompTIA A+ Core 1 (220-1001) exam.',
				],

				[
					'name' => 'Cert Prep 8: Internet and the Cloud',
					'link' => 'https://www.linkedin.com/learning/comptia-a-plus-220-1001-cert-prep-7-understanding-networking?trk=li-itsupport-certprep7-en&src=re-other&veh=127.0.0.1%7Cre-other',
					'description' => 'Prepare to take and pass the CompTIA A+ Core 1 (220-1001) exam. Review internet fundamentals—from broadband connections to VPNs—and dig into key virtualization concepts.',
				],
			],

		];

		foreach ($data as $id => $modules) {
			foreach ($modules as $module) {
				$module['course_id'] = $id + 1;
				$this->db->table('modules')->insert($module);
			}
		}
	}
}
