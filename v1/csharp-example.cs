/*
 *  Author: Laim McKenzie 
 *  Version: 1.0
 *  Date: 26-03-2022
 *  Comment: Get's the name of each application
 */

using System;
using System.Linq;
using System.Xml.Linq;

namespace ConsoleApp1
{
    class Program
    {
        static void Main(string[] args)
        {
            XDocument xd = XDocument.Load("https://snwapi.com/api/1.0/?format=xml");

            var appNames = xd.Descendants("Application").Select(i => i.Element("Name").Value);

            foreach(var name in appNames)
            {
                Console.WriteLine(name.ToString());
            }

            Console.ReadKey();
        }
    }
}
