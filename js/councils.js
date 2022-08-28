const councilsData = {
  unep: {
    name: "UNEP (United Nations Environment Programme)",
    imgPath: "../assets/councils/UNEP-min.png",
    delegate: "Beginner - Single delegate",
    topic:
      "Diminishing the Use of Plastics in the Medical Industry to Achieve Sustainability",
    description:
      "UNEP is an organization that works on the environment under the auspices of the United Nations General Assembly. UNEP's mandate is to continue to examine the situation of the global environment. The analysis is carried out in conjunction with actions to address three major environmental issues. To properly carry out this mandate, UNEP splits its activities into seven sub-programs. UNEP collaborates with 193 member states, as well as a number of representatives and stakeholders, to assist the state in meeting its environmental commitments. Thus, in accordance with the 2030 Agenda for Sustainable Development, UNEP is expected to build a sustainable environment.",
    topicDescription:
      "The world had already been at stake even before the pandemic, with global warming and climate change reaching its peak and covid did barely nothing to alter its pace. An enormous amount of plastic waste mostly from medicine such as discarded syringes, used test kits and old vaccine bottles, posed a massive threat to the world, whether it be to humans or other living beings. Currently, the medical waste has reached 370% in some places such as Hubei province, China. While these numbers are no small amount, the waste management in each and every country was still at an alarming rate. New policies and regulations must be implemented to strengthen systems and sustainably reduce and manage medical wastes because the medical waste is potentially infectious to the environment. Thus, it is part of UNEP’s duty and responsibility to partake and find further solutions to minimize the plastic waste which can threaten sustainable living.",
  },
  who: {
    name: "WHO (World Health Organization)",
    topic:
      "Establishing General Framework for Universal Healthcare to Control the Future Pandemic",
    imgPath: "../assets/councils/WHO-min.png",
    delegate: "Beginner - Single delegate",
    description:
      "WHO, as the name implies, is a specialized United Nations agency concerned with global health. WHO's primary role is to ensure that all people have equal access to health care. WHO also works with 194 member countries to address global health issues such as pandemics, natural catastrophes, and disease outbreaks. The World Health Assembly, composed of members from various countries, was present in the 1948 Constitution as a decision-making body for WHO. In carrying out its duty, WHO also conducts reliable research and collects data to aid in the improvement of global health conditions in a clear and unambiguous manner.",
    topicDescription:
      "In the last two years, the Covid-19 pandemic has disrupted the life of the global community. WHO recorded 6,361,157 deaths as of mid-July 2022 due to the Covid-19 the pandemic. The easy spread of the virus causes chaos amongst people, governments, and international organizations. Due to the lack of readiness to face a pandemic, health services are also overwhelmed in controlling and accommodating the increasing number of Covid-19 patients. Countries will have to make tough decisions to balance the demands of an immediate response to COVID-19 while taking strategic planning and coordinated action to maintain the delivery of essential health services while reducing the risk of system collapse. Therefore, WHO is expected to be able to create a mature framework and readiness of health services to ensure sustainable human health in the future pandemic.",
  },
  eu: {
    name: "EU (European Union)",
    topic:
      "Achieving Economic Stability among European Countries due to the Russia-Ukraine War",
    imgPath: "../assets/councils/EUROPEAN UNION-min.png",
    delegate: "Intermediate - Single delegate",
    description:
      "The European Union is a multinational organization of 27 European countries. The EU was founded in order for European countries to gain strength and become outstanding, particularly in the economic field. In terms of legal execution, the EU is divided into three main bodies: the European Council, the European Parliament, and the European Commission. The EU has the principle of promoting peace and security among EU member states. This is accomplished through the protection of people's human rights, the establishment of a strong economic foundation, the creation of a healthy environment, and the promotion of European interests on a global scale.",
    topicDescription:
      "The military conflict between Russia and Ukraine, which began in early 2022, is a real threat to world peace after the pandemic. It has resulted in heavy casualties, major infrastructure damage, providing obstacles to global economic reconstruction and the creation of sustainable peace after the Covid-19 pandemic. With restrictions on Russia's oil, natural gas, and metal exports, production and industrial activities are hampered due to a lack of supply to meet the high demand for production. This phenomenon will lead to inflation in many countries around the world. The geographical location of Russia, the largest neighboring country to the east of the European Union, makes the EU closely correlate with the economic impact through fluctuating trade activities and policies in response to the conflict. In conclusion, the European Union is expected to preserve the economic stability among EU members of the impact of the Russia Ukraine war.",
  },
  unsc: {
    name: "UNSC (United Nations Security Council)",
    topic:
      "Border Territories Dispute: Ensuring International Security in Aksai Chin-Ladakh, Himalayan Region",
    imgPath: "../assets/councils/UNSC-min.png",
    delegate: "Advance - Double delegate",
    description:
      "The United Nations Security Council is concerned with international stability and security. The UNSC has the right to compel member states to comply with its decisions directly under the United Nations Charter. Unlike previous councils, the UN Security Council has the authority to send peacekeepers to levy penalties against individuals who disrupt global security and order. The UN Security Council also attempts to assist countries in resolving disputes by making recommendations for acceptable solutions to achieve international security. If necessary, the UNSC can be found at the United Nations headquarters in New York City where each representative could hold a meeting.",
    topicDescription:
      "The proximity of China and India causes various problems due to differences in interests between the two countries,  especially in border areas. China-India issues began by the conflict over territory in 1962, which was fought over the Aksai-Chin plains in Kashmir and Mc. Mahon Line and continued in 1987 over Sumpus Chu Valley region, Arunachal Pradesh. This tension still remains because China built a bridge on a lake in the disputed Ladakh region that was considered illegal by the Indian government. Serious efforts must be taken to tackle the tension that arises between China and India, because it has enormous potential such as nuclear weaponizations, economics limitations, inflation, etc. UNSC must act decisively and ensure the agreed security and peace must be carried out because the diplomatic efforts that have occurred so far between the two countries are only temporary and will continuously be repeated with a new conflict.",
  },
};
// add event listener to each button
const councilCards = document.querySelectorAll(".councils-card-content");
console.log(councilCards);
councilCards.forEach((e) => {
  e.addEventListener("click", () => {
    showCouncilDetail(e.value);
  });
});
document
  .querySelector(".council-close")
  .addEventListener("click", toggleDetail);

// listen to esc button press to close the pop up info
document.onkeydown = (e) => {
  let key = e.key.toLowerCase();
  if (key === "escape" && councilDetail.classList.contains("show")) {
    toggleDetail();
  }
};

const councilDetail = document.querySelector(".council-detail");
const councilName = document.querySelector(".council-name");
const img = document.querySelector(".council-img");
const delegation = document.querySelector(".delegation");
const description = document.querySelector(".council-description");
const topic = document.querySelector(".council-topic");
const topicDescription = document.querySelector(".council-topic-description");

function toggleDetail() {
  councilDetail.classList.toggle("show");
}

function showCouncilDetail(name) {
  const councilData = councilsData[name];

  councilName.innerHTML = councilData.name;
  img.src = councilData.imgPath;
  description.innerHTML = councilData.description;
  delegation.innerHTML = councilData.delegate;
  topic.innerHTML = councilData.topic;
  topicDescription.innerHTML = councilData.topicDescription;
  toggleDetail();
}
