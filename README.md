# Brute Force Detection Lab 🔐

This project simulates brute-force login attacks using Hydra, with detection and monitoring using Wireshark, pfSense firewall, and Snort IDS. It showcases real-time traffic analysis and the creation of custom detection rules for login-based intrusion attempts.

##  Attack Simulation

## 🧪 Tools Used
- **Hydra** – for brute-force attack simulation
- **pfSense** – firewall configuration and logging
- **Wireshark** – network packet capture and HTTP analysis
- **Snort IDS** – intrusion detection and custom rule creation
- **Ubuntu Linux** – hosting the login server (Nginx + PHP)
- **VirtualBox** – virtual lab environment

## 📁 Project Structure

brute-force-detection-lab/ 
├── README.md 
├── documentation.md 
├── screenshots/ │ ├── hydra-terminal.png │ ├── wireshark-post-stream.png │ ├── snort-alerts.png │ └── pfsense-setup.png ├── rules/ │ └── custom-snort-rule.txt ├── pcap/ │ └── attack-capture.pcapng ├── login-test/ │ └── index.php
├── Rules/ | ├── Snort-Custom-Rules.png | ├── snort custom rule.txt
├── Pcap/ | ├── packet Captured.png | ├── Traffic Captured.txt
├── Login-test/ | ├── Login Page.png |  ├── index.php


### Scenario

1. Login portal hosted on Nginx using PHP (`index.php`)
2. Hydra brute-forces login:
   ```bash
   hydra -l admin -P /home/vboxuser/rockyou.txt 192.168.1.10 http-post-form "/index.php:username=^USER^&password=^PASS^:Login Failed" -V
      or
   hydra -l admin -P /home/vboxuser/minilist.txt 192.168.1.10 http-post-form "/index.php:username=^USER^&password=^PASS^:Login Failed" -V
3. Snort (on pfSense) detects and logs the attack.
4.Wireshark captures POST payloads on lo interface and shows username/password attempts.


## 🚀 Lab Objectives
- Simulate brute-force login attempts
- Capture HTTP POST traffic with credentials in Wireshark
- Detect intrusion attempts using Snort custom rules
- Analyze and validate alerts through Snort and pfSense

## 🖥 Screenshots
Screenshots of the attack, traffic capture, and alerts are available in the `/screenshots` directory.

## 🧠 Author

**Muhammad Junaid**  
[GitHub Profile](https://github.com/junaidmalik1809)  
[LinkedIn](https://linkedin.com/in/muhammad-junaid-95bb761a2/)

